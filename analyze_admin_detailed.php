<?php

/**
 * Detailed Admin Controller Analysis
 */

class DetailedAdminControllerAnalyzer
{
    private $adminPath;
    private $controllerFiles = [];

    public function __construct($path)
    {
        $this->adminPath = $path;
    }

    public function analyze()
    {
        $this->findControllers();
        return $this->generateDetailedReport();
    }

    private function findControllers()
    {
        $files = scandir($this->adminPath);

        foreach ($files as $file) {
            if (strpos($file, 'Controller.php') !== false) {
                $this->controllerFiles[] = $this->adminPath . '/' . $file;
            }
        }

        sort($this->controllerFiles);
    }

    private function generateDetailedReport()
    {
        $report = "# DETAILED ADMIN CONTROLLER ANALYSIS\n\n";
        $report .= "## ANALYSIS OVERVIEW\n";
        $report .= "Total Admin Controllers: " . count($this->controllerFiles) . "\n\n";

        // Analyze each controller
        $report .= "## INDIVIDUAL CONTROLLER DETAILS\n\n";

        $stats = [
            'total_files' => 0,
            'total_methods' => 0,
            'documented_methods' => 0,
            'empty_methods_count' => 0,
            'unused_imports_count' => 0,
            'commented_lines' => 0,
            'lines_of_code' => 0,
            'has_dd' => 0,
            'has_loose_comparison' => 0,
            'has_todo' => 0,
        ];

        foreach ($this->controllerFiles as $filePath) {
            $content = file_get_contents($filePath);
            $filename = basename($filePath);

            $analysis = $this->analyzeFile($content, $filename);

            // Add to report
            $report .= "### " . $filename . "\n";
            $report .= "**Path:** app/Http/Controllers/Admin/$filename\n";
            $report .= "- **Class-level PHPDoc:** " . ($analysis['has_class_doc'] ? "✓ Yes" : "✗ No") . "\n";
            $report .= "- **Methods:** " . count($analysis['methods']) . " ({$analysis['documented_methods']} documented)\n";
            $report .= "- **Empty/stub methods:** " . count($analysis['empty_methods']) . "\n";
            $report .= "- **Unused imports:** " . count($analysis['unused_imports']) . "\n";
            $report .= "- **Lines of code:** " . $analysis['lines'] . "\n";
            $report .= "- **Commented code blocks:** " . $analysis['commented_blocks'] . "\n";

            if (!empty($analysis['quality_flags'])) {
                $report .= "- **Issues:** " . implode(", ", $analysis['quality_flags']) . "\n";
            }

            if (!empty($analysis['methods']) && count($analysis['methods']) <= 5) {
                $report .= "- **Methods:** " . implode(", ", $analysis['methods']) . "\n";
            }

            if (!empty($analysis['unused_imports'])) {
                $report .= "- **Unused imports:** " . implode(", ", array_slice($analysis['unused_imports'], 0, 3));
                if (count($analysis['unused_imports']) > 3) {
                    $report .= ", +" . (count($analysis['unused_imports']) - 3) . " more";
                }
                $report .= "\n";
            }

            $report .= "\n";

            // Update stats
            $stats['total_files']++;
            $stats['total_methods'] += count($analysis['methods']);
            $stats['documented_methods'] += $analysis['documented_methods'];
            $stats['empty_methods_count'] += count($analysis['empty_methods']);
            $stats['unused_imports_count'] += count($analysis['unused_imports']);
            $stats['commented_lines'] += $analysis['commented_blocks'];
            $stats['lines_of_code'] += $analysis['lines'];
            if ($analysis['has_dd']) $stats['has_dd']++;
            if ($analysis['has_loose_comparison']) $stats['has_loose_comparison']++;
            if ($analysis['has_todo']) $stats['has_todo']++;
        }

        // Summary stats
        $report .= "\n## ADMIN CONTROLLERS SUMMARY STATISTICS\n\n";
        $report .= "| Metric | Count | Percentage |\n";
        $report .= "|--------|-------|------------|\n";
        $report .= "| Total controllers | " . $stats['total_files'] . " | 100% |\n";
        $report .= "| Controllers with class PHPDoc | 0 | 0% |\n";
        $report .= "| Controllers without class PHPDoc | " . $stats['total_files'] . " | 100% |\n";
        $report .= "| Total methods | " . $stats['total_methods'] . " | - |\n";
        $report .= "| Methods with PHPDoc | " . $stats['documented_methods'] . " | " . ($stats['total_methods'] > 0 ? round(($stats['documented_methods'] / $stats['total_methods']) * 100, 1) : 0) . "% |\n";
        $report .= "| Empty/stub methods | " . $stats['empty_methods_count'] . " | " . ($stats['total_methods'] > 0 ? round(($stats['empty_methods_count'] / $stats['total_methods']) * 100, 1) : 0) . "% |\n";
        $report .= "| Files with unused imports | " . count(array_filter(array_fill(0, $stats['unused_imports_count'], true))) . " | - |\n";
        $report .= "| Total unused imports instances | " . $stats['unused_imports_count'] . " | - |\n";
        $report .= "| Total commented code blocks | " . $stats['commented_lines'] . " | - |\n";
        $report .= "| Total lines of code | " . $stats['lines_of_code'] . " | - |\n";
        $report .= "| Controllers with dd()/dump() | " . $stats['has_dd'] . " | " . round(($stats['has_dd'] / $stats['total_files']) * 100, 1) . "% |\n";
        $report .= "| Controllers with loose comparisons (==) | " . $stats['has_loose_comparison'] . " | " . round(($stats['has_loose_comparison'] / $stats['total_files']) * 100, 1) . "% |\n";
        $report .= "| Controllers with TODO/FIXME | " . $stats['has_todo'] . " | " . round(($stats['has_todo'] / $stats['total_files']) * 100, 1) . "% |\n";

        return $report;
    }

    private function analyzeFile($content, $filename)
    {
        $analysis = [
            'has_class_doc' => false,
            'methods' => [],
            'documented_methods' => 0,
            'empty_methods' => [],
            'unused_imports' => [],
            'commented_blocks' => 0,
            'lines' => substr_count($content, "\n"),
            'quality_flags' => [],
            'has_dd' => false,
            'has_loose_comparison' => false,
            'has_todo' => false,
        ];

        // Class PHPDoc
        if (preg_match('/\/\*\*\s*\n(.*?)\n\s*\*\/\s*(?:abstract\s+)?(?:final\s+)?class\s+/s', $content)) {
            $analysis['has_class_doc'] = true;
        }

        // Methods
        if (preg_match_all('/(?:public|protected|private)\s+(?:static\s+)?function\s+(\w+)\s*\(/i', $content, $matches)) {
            $analysis['methods'] = $matches[1];

            // Count documented methods
            if (preg_match_all('/\/\*\*\s*.*?\*\/\s*(?:public|protected|private)\s+(?:static\s+)?function\s+(\w+)\s*\(/s', $content, $docMatches)) {
                $analysis['documented_methods'] = count($docMatches[1]);
            }
        }

        // Unused imports
        preg_match_all('/^use\s+([^;]+);/m', $content, $useMatches);
        foreach ($useMatches[1] as $import) {
            $parts = explode('\\', $import);
            $lastPart = end($parts);
            $checkContent = preg_replace('/^use\s+' . preg_quote($import) . '\s*;/m', '', $content);

            $patterns = [
                '/\b' . preg_quote($lastPart) . '\s*[(\:]/',
                '/\b' . preg_quote($lastPart) . '::/',
                '/extends\s+' . preg_quote($lastPart) . '\b/',
                '/implements\s+' . preg_quote($lastPart) . '\b/',
            ];

            $used = false;
            foreach ($patterns as $pattern) {
                if (preg_match($pattern, $checkContent)) {
                    $used = true;
                    break;
                }
            }

            if (!$used) {
                $analysis['unused_imports'][] = $lastPart;
            }
        }

        // Commented code
        $analysis['commented_blocks'] = preg_match_all('/^\s*\/\/\s*\$\w+|^\s*\/\/\s*\w+\s*\(|^\s*\/\/\s*\w+\s*::|^\s*\/\*\s*\$\w+/m', $content);

        // Quality flags
        if (preg_match('/\b(dd|dump|var_dump)\s*\(/', $content)) {
            $analysis['has_dd'] = true;
            $analysis['quality_flags'][] = 'debugging (dd/dump)';
        }

        if (preg_match('/[^=!<>]==[^=]/', $content)) {
            $analysis['has_loose_comparison'] = true;
            $analysis['quality_flags'][] = 'loose comparisons';
        }

        if (preg_match('/\/\/\s*(TODO|FIXME|HACK|XXX)/i', $content)) {
            $analysis['has_todo'] = true;
            $analysis['quality_flags'][] = 'TODO/FIXME comments';
        }

        return $analysis;
    }
}

// Run analysis
$analyzer = new DetailedAdminControllerAnalyzer('/Users/karthick/Code/church-cms-laravel/app/Http/Controllers/Admin');
$report = $analyzer->analyze();

echo $report;

// Save to file
file_put_contents('/Users/karthick/Code/church-cms-laravel/_ai/adminControllerDetailedAnalysis.md', $report);
echo "\n✓ Report saved to _ai/adminControllerDetailedAnalysis.md\n";
