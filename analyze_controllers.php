<?php

/**
 * Controller Analysis Script
 * Analyzes all Laravel controllers for documentation, imports, and code quality
 */

class ControllerAnalyzer
{
    private $controllersPath;
    private $results = [
        'total' => 0,
        'with_class_doc' => 0,
        'without_class_doc' => [],
        'controllers_by_folder' => [],
        'methods_without_doc' => [],
        'unused_imports' => [],
        'empty_methods' => [],
        'commented_code' => [],
        'quality_issues' => [],
    ];

    public function __construct($path)
    {
        $this->controllersPath = $path;
    }

    public function analyze()
    {
        $this->findAndAnalyzeControllers($this->controllersPath);
        return $this->generateReport();
    }

    private function findAndAnalyzeControllers($dir, $folder = 'root')
    {
        $files = scandir($dir);

        foreach ($files as $file) {
            if ($file === '.' || $file === '..') continue;

            $filePath = $dir . '/' . $file;

            if (is_dir($filePath)) {
                $this->findAndAnalyzeControllers($filePath, $file);
            } elseif (strpos($file, 'Controller.php') !== false) {
                $this->analyzeController($filePath, $folder);
            }
        }
    }

    private function analyzeController($filePath, $folder)
    {
        $this->results['total']++;

        if (!isset($this->results['controllers_by_folder'][$folder])) {
            $this->results['controllers_by_folder'][$folder] = [];
        }

        $content = file_get_contents($filePath);
        $relPath = str_replace('/Users/karthick/Code/church-cms-laravel/', '', $filePath);

        $analysis = [
            'path' => $relPath,
            'name' => basename($filePath),
            'has_class_doc' => false,
            'class_doc' => '',
            'methods' => [],
            'unused_imports' => [],
            'empty_methods' => [],
            'commented_code_blocks' => [],
            'quality_issues' => [],
        ];

        // Parse PHPDoc
        $this->analyzePHPDoc($content, $analysis);

        // Find methods and their documentation
        $this->analyzeMethods($content, $analysis);

        // Check imports
        $this->analyzeImports($content, $analysis);

        // Find empty methods
        $this->findEmptyMethods($content, $analysis);

        // Find commented code
        $this->findCommentedCode($content, $analysis);

        // Code quality checks
        $this->checkCodeQuality($content, $analysis);

        // Update counters
        if ($analysis['has_class_doc']) {
            $this->results['with_class_doc']++;
        } else {
            $this->results['without_class_doc'][] = $analysis['name'];
        }

        if (!empty($analysis['methods_without_doc'])) {
            $this->results['methods_without_doc'][$analysis['name']] = $analysis['methods_without_doc'];
        }

        if (!empty($analysis['unused_imports'])) {
            $this->results['unused_imports'][$analysis['name']] = $analysis['unused_imports'];
        }

        if (!empty($analysis['empty_methods'])) {
            $this->results['empty_methods'][$analysis['name']] = $analysis['empty_methods'];
        }

        if (!empty($analysis['commented_code_blocks'])) {
            $this->results['commented_code'][$analysis['name']] = count($analysis['commented_code_blocks']);
        }

        if (!empty($analysis['quality_issues'])) {
            $this->results['quality_issues'][$analysis['name']] = $analysis['quality_issues'];
        }

        $this->results['controllers_by_folder'][$folder][] = $analysis;
    }

    private function analyzePHPDoc(&$content, &$analysis)
    {
        // Look for class docblock
        if (preg_match('/\/\*\*\s*\n(.*?)\n\s*\*\/\s*(?:abstract\s+)?(?:final\s+)?class\s+/s', $content, $matches)) {
            $analysis['has_class_doc'] = true;
            $analysis['class_doc'] = trim($matches[1]);
        }
    }

    private function analyzeMethods(&$content, &$analysis)
    {
        $analysis['methods_without_doc'] = [];

        // Extract class body to avoid matching docblocks outside the class
        if (preg_match('/^class\s+\w+.*?\{(.*)\}$/ms', $content, $classMatch)) {
            $classBody = $classMatch[1];

            // Find all methods
            if (preg_match_all('/(?:\/\*\*.*?\*\/)?\s*(?:public|protected|private)\s+(?:static\s+)?function\s+(\w+)/s', $classBody, $methodMatches)) {
                foreach ($methodMatches[1] as $method) {
                    $analysis['methods'][] = $method;

                    // Check if method has docblock
                    $methodPattern = '/\/\*\*.*?\*\/\s*(?:public|protected|private)\s+(?:static\s+)?function\s+' . preg_quote($method) . '/s';
                    if (!preg_match($methodPattern, $classBody)) {
                        $analysis['methods_without_doc'][] = $method;
                    }
                }
            }
        }
    }

    private function analyzeImports(&$content, &$analysis)
    {
        $analysis['unused_imports'] = [];

        // Find all use statements
        preg_match_all('/^use\s+([^;]+);/m', $content, $useMatches);

        foreach ($useMatches[1] as $import) {
            $parts = explode('\\', $import);
            $lastPart = end($parts);

            // Check if the import is used in the code
            // Remove the use statement from content first
            $checkContent = preg_replace('/^use\s+' . preg_quote($import) . '\s*;/m', '', $content);

            // Check various ways the import might be used
            $patterns = [
                '/\b' . preg_quote($lastPart) . '\s*[(\:]/',  // Class instantiation or type hint
                '/\b' . preg_quote($lastPart) . '::/',  // Static call
                '/extends\s+' . preg_quote($lastPart) . '\b/',  // Extends
                '/implements\s+' . preg_quote($lastPart) . '\b/',  // Implements
            ];

            $used = false;
            foreach ($patterns as $pattern) {
                if (preg_match($pattern, $checkContent)) {
                    $used = true;
                    break;
                }
            }

            if (!$used) {
                $analysis['unused_imports'][] = $lastPart . ' (from ' . $import . ')';
            }
        }
    }

    private function findEmptyMethods(&$content, &$analysis)
    {
        $analysis['empty_methods'] = [];

        // Find methods with only comments or whitespace
        if (preg_match_all('/(?:public|protected|private)\s+(?:static\s+)?function\s+(\w+)\s*\([^)]*\)\s*(?::\s*\w+)?\s*\{([^}]*)\}/s', $content, $matches)) {
            foreach ($matches[0] as $index => $methodContent) {
                $methodName = $matches[1][$index];
                $methodBody = $matches[2][$index];
                $methodBody = trim($methodBody);

                // Check if body is empty or only contains comments
                if (empty($methodBody) ||
                    preg_match('/^\/\/ TODO:|^\/\/ FIXME:|^\/\/ stub|^\s*\/\/.*$/m', $methodBody) ||
                    (strlen($methodBody) < 20 && preg_match('/^(\/\/.*|\/\*.*\*\/|\s)*$/s', $methodBody))) {
                    $analysis['empty_methods'][] = $methodName;
                }
            }
        }
    }

    private function findCommentedCode(&$content, &$analysis)
    {
        $analysis['commented_code_blocks'] = [];

        // Find commented-out code (lines that start with // or /* and look like code)
        if (preg_match_all('/^\s*\/\/\s*\$\w+|^\s*\/\/\s*\w+\s*\(|^\s*\/\/\s*\w+\s*::|^\s*\/\*\s*\$\w+/m', $content, $matches)) {
            $analysis['commented_code_blocks'] = array_unique($matches[0]);
        }
    }

    private function checkCodeQuality(&$content, &$analysis)
    {
        $analysis['quality_issues'] = [];

        // Check for long methods (simple heuristic)
        if (substr_count($content, '{') > 20 || substr_count($content, '}') > 20) {
            $analysis['quality_issues'][] = 'Possibly long/complex methods (high brace count)';
        }

        // Check for TODO/FIXME comments
        if (preg_match_all('/\/\/\s*(TODO|FIXME|HACK|XXX)/i', $content, $matches)) {
            $analysis['quality_issues'][] = 'Contains ' . count($matches[0]) . ' TODO/FIXME comments';
        }

        // Check for loose comparisons (== instead of ===)
        if (preg_match_all('/[^=!<>]==[^=]/', $content)) {
            $analysis['quality_issues'][] = 'Contains loose comparisons (==)';
        }

        // Check for dd() or dump() calls
        if (preg_match('/\b(dd|dump|var_dump)\s*\(/', $content)) {
            $analysis['quality_issues'][] = 'Contains debugging functions (dd/dump/var_dump)';
        }

        // Check for multiple concerns (queries + formatting + logic)
        $hasQueryBuilding = preg_match('/where|select|join|insert|update|delete/i', $content);
        $hasFormatting = preg_match('/json_encode|serialize|sprintf|format/i', $content);
        $hasLooping = preg_match('/foreach|for\s*\(|while\s*\(/i', $content);

        if (($hasQueryBuilding && $hasFormatting) || ($hasQueryBuilding && $hasLooping && $hasFormatting)) {
            $analysis['quality_issues'][] = 'Multiple concerns in single file (may need refactoring)';
        }
    }

    private function generateReport()
    {
        $totalControllers = $this->results['total'];
        $withDoc = $this->results['with_class_doc'];
        $withoutDoc = count($this->results['without_class_doc']);
        $docPercentage = $totalControllers > 0 ? round(($withDoc / $totalControllers) * 100, 2) : 0;

        $report = "# CHURCH CMS LARAVEL - CONTROLLER ANALYSIS REPORT\n\n";
        $report .= "## SUMMARY STATISTICS\n";
        $report .= "- **Total Controllers Analyzed:** $totalControllers\n";
        $report .= "- **Controllers with Class PHPDoc:** $withDoc (" . $docPercentage . "%)\n";
        $report .= "- **Controllers without Class PHPDoc:** " . $withoutDoc . " (" . (100 - $docPercentage) . "%)\n\n";

        // Controllers by folder
        $report .= "## CONTROLLERS BY FOLDER\n";
        foreach ($this->results['controllers_by_folder'] as $folder => $controllers) {
            $count = count($controllers);
            $docCount = count(array_filter($controllers, fn($c) => $c['has_class_doc']));
            $record = $docCount > 0 ? "$docCount/$count documented" : "0/$count documented";
            $report .= "- **$folder:** $count controllers ($record)\n";
        }
        $report .= "\n";

        // Controllers completely lacking documentation
        $report .= "## CONTROLLERS WITHOUT CLASS-LEVEL PHPDOC\n";
        $report .= "Total: " . count($this->results['without_class_doc']) . "\n\n";

        $report .= "### Controllers without documentation by folder:\n";
        foreach ($this->results['controllers_by_folder'] as $folder => $controllers) {
            $undocumented = array_filter($controllers, fn($c) => !$c['has_class_doc']);
            if (!empty($undocumented)) {
                $report .= "\n**$folder** (" . count($undocumented) . "):\n";
                foreach ($undocumented as $controller) {
                    $report .= "- " . $controller['name'] . "\n";
                }
            }
        }
        $report .= "\n";

        // Unused imports summary
        $report .= "## UNUSED IMPORTS ANALYSIS\n";
        $report .= "Total files with unused imports: " . count($this->results['unused_imports']) . "\n";

        if (count($this->results['unused_imports']) > 0) {
            $report .= "\nCommon unused imports:\n";
            $importCounts = [];
            foreach ($this->results['unused_imports'] as $file => $imports) {
                foreach ($imports as $import) {
                    $importCounts[$import] = ($importCounts[$import] ?? 0) + 1;
                }
            }
            arsort($importCounts);
            foreach (array_slice($importCounts, 0, 20) as $import => $count) {
                $report .= "- $import: found $count times\n";
            }
        }
        $report .= "\n";

        // Empty methods
        $report .= "## EMPTY/STUB METHODS ANALYSIS\n";
        $totalEmptyMethods = 0;
        foreach ($this->results['empty_methods'] as $count) {
            $totalEmptyMethods += is_array($count) ? count($count) : 1;
        }
        $report .= "Total empty/stub methods: " . count($this->results['empty_methods']) . " controllers, $totalEmptyMethods total methods\n";

        if (count($this->results['empty_methods']) > 0) {
            $report .= "\nControllers with empty methods:\n";
            foreach ($this->results['empty_methods'] as $controller => $methods) {
                $report .= "- **$controller:** " . implode(', ', $methods) . "\n";
            }
        }
        $report .= "\n";

        // Commented code
        $report .= "## COMMENTED-OUT CODE ANALYSIS\n";
        $report .= "Files with commented code blocks: " . count($this->results['commented_code']) . "\n";
        if (count($this->results['commented_code']) > 0) {
            $report .= "\nControllers with commented code:\n";
            foreach ($this->results['commented_code'] as $controller => $count) {
                $report .= "- **$controller:** $count blocks\n";
            }
        }
        $report .= "\n";

        // Code quality issues
        $report .= "## CODE QUALITY ISSUES SUMMARY\n";
        $report .= "Files with quality issues: " . count($this->results['quality_issues']) . "\n";

        if (count($this->results['quality_issues']) > 0) {
            $issueCounts = [];
            foreach ($this->results['quality_issues'] as $issues) {
                foreach ($issues as $issue) {
                    $issueCounts[$issue] = ($issueCounts[$issue] ?? 0) + 1;
                }
            }
            arsort($issueCounts);

            $report .= "\nMost common issues:\n";
            foreach (array_slice($issueCounts, 0, 15) as $issue => $count) {
                $report .= "- $issue: $count controllers\n";
            }
        }
        $report .= "\n";

        // Methods without documentation
        $report .= "## METHODS WITHOUT DOCUMENTATION\n";
        $totalMethodsNoDocs = 0;
        $controllersWithUndocMethods = 0;
        foreach ($this->results['methods_without_doc'] as $methods) {
            $controllersWithUndocMethods++;
            $totalMethodsNoDocs += count($methods);
        }
        $report .= "Controllers with undocumented methods: $controllersWithUndocMethods\n";
        $report .= "Total undocumented methods: $totalMethodsNoDocs\n";

        return $report;
    }
}

// Run analysis
$analyzer = new ControllerAnalyzer('/Users/karthick/Code/church-cms-laravel/app/Http/Controllers');
$report = $analyzer->analyze();

echo $report;

// Save to file
file_put_contents('/Users/karthick/Code/church-cms-laravel/_ai/controllerAnalysisReport.md', $report);
echo "\n\n✓ Report saved to _ai/controllerAnalysisReport.md\n";
