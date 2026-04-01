<?php

/**
 * Traits Analysis Script
 * Analyzes all Laravel traits for documentation, imports, and code quality
 */

class TraitAnalyzer
{
    private $traitsPath;
    private $results = [
        'total' => 0,
        'with_class_doc' => 0,
        'without_class_doc' => [],
        'details' => [],
        'methods_without_doc' => [],
        'unused_imports' => [],
        'quality_issues' => [],
        'statistics' => [
            'total_methods' => 0,
            'documented_methods' => 0,
            'total_imports' => 0,
            'potentially_unused_imports' => 0,
        ]
    ];

    public function __construct($path)
    {
        $this->traitsPath = $path;
    }

    public function analyze()
    {
        $files = scandir($this->traitsPath);

        foreach ($files as $file) {
            if ($file !== '.' && $file !== '..' && strpos($file, '.php') !== false) {
                $filePath = $this->traitsPath . '/' . $file;
                $this->analyzeTrait($filePath, $file);
            }
        }

        return $this->generateReport();
    }

    private function analyzeTrait($filePath, $fileName)
    {
        $content = file_get_contents($filePath);
        $lines = explode("\n", $content);

        $this->results['total']++;

        $detail = [
            'file' => $fileName,
            'line_count' => count($lines),
            'has_class_doc' => $this->hasClassDocumentation($lines),
            'methods' => [],
            'imports' => [],
            'issues' => [],
        ];

        // Extract class documentation
        if (!$detail['has_class_doc']) {
            $this->results['without_class_doc'][] = $fileName;
        } else {
            $this->results['with_class_doc']++;
        }

        // Extract imports (use statements)
        $imports = $this->extractImports($lines);
        $detail['imports'] = $imports;
        $this->results['statistics']['total_imports'] += count($imports);

        // Extract methods and their documentation
        $methods = $this->extractMethods($content, $lines);
        $detail['methods'] = $methods;
        $this->results['statistics']['total_methods'] += count($methods);

        foreach ($methods as $method) {
            if (!$method['documented']) {
                $this->results['statistics']['documented_methods']++;
            } else {
                $this->results['statistics']['documented_methods']++;
            }
        }

        // Check for unused imports
        foreach ($imports as $import) {
            $className = $this->extractClassName($import);
            if (!$this->isImportUsed($content, $className)) {
                $detail['issues'][] = "Potentially unused import: {$import}";
                $this->results['statistics']['potentially_unused_imports']++;
            }
        }

        // Check for code quality issues
        $this->checkCodeQuality($content, $fileName, $detail);

        $this->results['details'][] = $detail;
    }

    private function hasClassDocumentation($lines)
    {
        $inTraitBlock = false;
        for ($i = 0; $i < count($lines); $i++) {
            $line = $lines[$i];

            if (strpos($line, '/**') !== false) {
                // Look for trait keyword after comment block
                for ($j = $i; $j < min($i + 20, count($lines)); $j++) {
                    if (strpos($lines[$j], 'trait ') !== false) {
                        return true;
                    }
                }
            }

            if (strpos($line, 'trait ') !== false) {
                return false;
            }
        }
        return false;
    }

    private function extractImports($lines)
    {
        $imports = [];
        foreach ($lines as $line) {
            if (strpos($line, 'use ') === 0 && strpos($line, ';') !== false) {
                $import = trim($line);
                $import = str_replace(['use ', ';'], '', $import);
                $imports[] = $import;
            }
        }
        return $imports;
    }

    private function extractClassName($importStatement)
    {
        $parts = explode(' as ', $importStatement);
        if (count($parts) > 1) {
            return trim($parts[1]);
        }

        $parts = explode('\\', $importStatement);
        return trim(end($parts));
    }

    private function isImportUsed($content, $className)
    {
        // Simple check - look for the class name in the content
        $pattern = '/[^a-zA-Z0-9_]' . preg_quote($className) . '[^a-zA-Z0-9_]/';
        return preg_match($pattern, $content) > 0;
    }

    private function extractMethods($content, $lines)
    {
        $methods = [];
        $inComment = false;
        $commentStart = 0;

        for ($i = 0; $i < count($lines); $i++) {
            $line = trim($lines[$i]);

            // Track documentation blocks
            if (strpos($line, '/**') !== false) {
                $inComment = true;
                $commentStart = $i;
            }

            if ($inComment && strpos($line, '*/') !== false) {
                $inComment = false;
            }

            // Find method definitions
            if (preg_match('/public\s+function\s+(\w+)\s*\(/', $line, $matches)) {
                $methodName = $matches[1];
                $hasDoc = ($i - $commentStart) < 20 && $commentStart > 0;

                // Get full method signature
                $signature = $line;
                $j = $i;
                while (strpos($signature, '{') === false && $j < count($lines) - 1) {
                    $j++;
                    $signature .= ' ' . trim($lines[$j]);
                }

                $methods[] = [
                    'name' => $methodName,
                    'documented' => $hasDoc,
                    'signature' => $this->cleanSignature($signature),
                    'line' => $i + 1,
                ];
            }
        }

        return $methods;
    }

    private function cleanSignature($signature)
    {
        $signature = preg_replace('/\s+/', ' ', $signature);
        $pos = strpos($signature, '{');
        if ($pos !== false) {
            $signature = substr($signature, 0, $pos);
        }
        return trim($signature);
    }

    private function checkCodeQuality($content, $fileName, &$detail)
    {
        // Check for dd(), dump() statements
        if (preg_match('/\bdd\s*\(/', $content)) {
            $detail['issues'][] = "Contains dd() debug statement";
        }

        if (preg_match('/\bdump\s*\(/', $content)) {
            $detail['issues'][] = "Contains dump() debug statement";
        }

        // Check for commented code blocks
        $commentedCodeCount = preg_match_all('/\/\/\s*\$|\/\/\s*if|\/\/\s*foreach|\/\/\s*while/', $content);
        if ($commentedCodeCount > 2) {
            $detail['issues'][] = "Contains multiple lines of commented-out code ({$commentedCodeCount} instances)";
        }

        // Check for missing type hints
        $methodCount = preg_match_all('/public\s+function/', $content);
        $typeHintedCount = preg_match_all('/public\s+function.*\(.*[:\w].*\)/', $content);
        if ($methodCount > 0 && $typeHintedCount === 0) {
            $detail['issues'][] = "No type hints detected in method parameters";
        }

        // Check for try-catch blocks
        $tryCatchCount = preg_match_all('/try\s*\{/', $content);
        if ($tryCatchCount > 0) {
            $detail['issues'][] = "Uses try-catch blocks (verify error handling is appropriate) - {$tryCatchCount} found";
        }
    }

    private function generateReport()
    {
        $report = "\n";
        $report .= str_repeat("=", 80) . "\n";
        $report .= "LARAVEL TRAITS AUDIT REPORT\n";
        $report .= str_repeat("=", 80) . "\n\n";

        // Summary Statistics
        $report .= "SUMMARY STATISTICS\n";
        $report .= str_repeat("-", 80) . "\n";
        $report .= sprintf("Total Traits Analyzed:          %d\n", $this->results['total']);
        $report .= sprintf("Traits with Class Doc:          %d (%.1f%%)\n",
            $this->results['with_class_doc'],
            $this->results['with_class_doc'] / $this->results['total'] * 100);
        $report .= sprintf("Traits without Class Doc:       %d\n", count($this->results['without_class_doc']));
        $report .= sprintf("Total Methods Analyzed:         %d\n", $this->results['statistics']['total_methods']);
        $report .= sprintf("Total Imports:                  %d\n", $this->results['statistics']['total_imports']);
        $report .= sprintf("Potentially Unused Imports:     %d\n", $this->results['statistics']['potentially_unused_imports']);
        $report .= "\n";

        // Traits without documentation
        if (!empty($this->results['without_class_doc'])) {
            $report .= "TRAITS WITHOUT CLASS DOCUMENTATION\n";
            $report .= str_repeat("-", 80) . "\n";
            foreach ($this->results['without_class_doc'] as $trait) {
                $report .= "  • {$trait}\n";
            }
            $report .= "\n";
        }

        // Detailed Analysis
        $report .= "DETAILED TRAIT ANALYSIS\n";
        $report .= str_repeat("-", 80) . "\n\n";

        usort($this->results['details'], function($a, $b) {
            return strcmp($a['file'], $b['file']);
        });

        foreach ($this->results['details'] as $detail) {
            $report .= "📄 " . $detail['file'] . "\n";
            $report .= "   Lines: {$detail['line_count']} | ";
            $report .= "Class Doc: " . ($detail['has_class_doc'] ? "✅ YES" : "❌ NO") . " | ";
            $report .= "Methods: " . count($detail['methods']) . " | ";
            $report .= "Imports: " . count($detail['imports']) . "\n";

            // Show methods
            if (!empty($detail['methods'])) {
                $report .= "   Methods:\n";
                foreach ($detail['methods'] as $method) {
                    $docMark = $method['documented'] ? "✅" : "❌";
                    $report .= "     {$docMark} {$method['name']}() [line {$method['line']}]\n";
                }
            }

            // Show imports
            if (!empty($detail['imports'])) {
                $report .= "   Imports:\n";
                foreach ($detail['imports'] as $import) {
                    $report .= "     • {$import}\n";
                }
            }

            // Show issues
            if (!empty($detail['issues'])) {
                $report .= "   ⚠️  Issues:\n";
                foreach ($detail['issues'] as $issue) {
                    $report .= "     • {$issue}\n";
                }
            }

            $report .= "\n";
        }

        // Recommendations
        $report .= "RECOMMENDATIONS\n";
        $report .= str_repeat("-", 80) . "\n";
        $undocumentedCount = count($this->results['without_class_doc']);
        if ($undocumentedCount > 0) {
            $report .= sprintf("1. Add class documentation to %d trait(s)\n", $undocumentedCount);
        }
        if ($this->results['statistics']['potentially_unused_imports'] > 0) {
            $report .= sprintf("2. Review and remove %d potentially unused imports\n", $this->results['statistics']['potentially_unused_imports']);
        }
        $report .= "3. Add comprehensive PHPDoc for all public methods\n";
        $report .= "4. Add parameter type hints to all methods\n";
        $report .= "5. Review and remove commented-out code blocks\n";
        $report .= "\n";

        return $report;
    }
}

// Run the analyzer
$analyzer = new TraitAnalyzer(__DIR__ . '/app/Traits');
$report = $analyzer->analyze();
echo $report;

// Optionally save to file
file_put_contents(__DIR__ . '/_ai/traits_audit.md', $report);
echo "\n✅ Report saved to: _ai/traits_audit.md\n";
?>
