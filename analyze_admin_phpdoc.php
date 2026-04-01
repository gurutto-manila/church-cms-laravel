<?php
/**
 * Analyze all Admin controllers for PHPDoc status
 */

$adminPath = __DIR__ . '/app/Http/Controllers/Admin';

// Get all PHP files recursively
$files = [];
$iterator = new RecursiveIteratorIterator(
    new RecursiveDirectoryIterator($adminPath),
    RecursiveIteratorIterator::LEAVES_ONLY
);

foreach ($iterator as $file) {
    if ($file->getExtension() === 'php') {
        $files[] = $file->getRealPath();
    }
}

sort($files);

$categories = [
    'has_phpdoc' => [],
    'missing_phpdoc' => [],
    'malformed_phpdoc' => [],
];

$samples = [
    'has_phpdoc' => [],
    'missing_phpdoc' => [],
    'malformed_phpdoc' => [],
];

foreach ($files as $filePath) {
    $content = file_get_contents($filePath);
    $lines = explode("\n", $content);

    // Get first 30 lines to analyze
    $firstLines = array_slice($lines, 0, 30);
    $firstContent = implode("\n", $firstLines);

    // Extract class name
    $classMatch = [];
    preg_match('/class\s+(\w+)/', $firstContent, $classMatch);
    $className = $classMatch[1] ?? 'Unknown';

    $relPath = str_replace($adminPath . '/', '', $filePath);

    // Check for class-level PHPDoc patterns
    $hasClassPhpDoc = false;
    $isMalformed = false;

    // Look for /** before class declaration
    if (preg_match('/\/\*\*\s*\n\s*\*.*?\*\/\s*\n\s*(final\s+)?(abstract\s+)?class\s+\w+/s', $firstContent)) {
        $hasClassPhpDoc = true;
    } else if (preg_match('/\/\*\*|\/\*|\*/', $firstContent)) {
        // There's some comment, might be malformed
        // Check if comment is properly before class
        $classPos = strpos($firstContent, 'class ');
        if ($classPos !== false) {
            $beforeClass = substr($firstContent, 0, $classPos);
            // Check if there's an unclosed comment or comment far from class
            if (preg_match('/\/\*(?!.*\*\/)/s', $beforeClass)) {
                $isMalformed = true;
            }
        }
    }

    if ($hasClassPhpDoc) {
        $categories['has_phpdoc'][] = [
            'class' => $className,
            'path' => $relPath,
            'fullPath' => $filePath
        ];
        if (count($samples['has_phpdoc']) < 5) {
            $samples['has_phpdoc'][] = [
                'class' => $className,
                'path' => $relPath,
                'lines' => array_slice($lines, 0, 20)
            ];
        }
    } else if ($isMalformed) {
        $categories['malformed_phpdoc'][] = [
            'class' => $className,
            'path' => $relPath,
            'fullPath' => $filePath
        ];
        if (count($samples['malformed_phpdoc']) < 5) {
            $samples['malformed_phpdoc'][] = [
                'class' => $className,
                'path' => $relPath,
                'lines' => array_slice($lines, 0, 20)
            ];
        }
    } else {
        $categories['missing_phpdoc'][] = [
            'class' => $className,
            'path' => $relPath,
            'fullPath' => $filePath
        ];
        if (count($samples['missing_phpdoc']) < 5) {
            $samples['missing_phpdoc'][] = [
                'class' => $className,
                'path' => $relPath,
                'lines' => array_slice($lines, 0, 20)
            ];
        }
    }
}

// Output results
echo "=== ADMIN CONTROLLERS PHPDOC ANALYSIS ===\n\n";
echo "Total Controllers Analyzed: " . count($files) . "\n\n";

echo "1. CONTROLLERS WITH PROPER CLASS-LEVEL PHPDOC\n";
echo "Count: " . count($categories['has_phpdoc']) . "\n";
echo "Controllers:\n";
foreach ($categories['has_phpdoc'] as $ctrl) {
    echo "  - " . $ctrl['class'] . " (" . $ctrl['path'] . ")\n";
}

echo "\n2. CONTROLLERS MISSING CLASS-LEVEL PHPDOC\n";
echo "Count: " . count($categories['missing_phpdoc']) . "\n";
echo "Controllers:\n";
foreach ($categories['missing_phpdoc'] as $ctrl) {
    echo "  - " . $ctrl['class'] . " (" . $ctrl['path'] . ")\n";
}

echo "\n3. CONTROLLERS WITH MALFORMED/INCORRECTLY PLACED PHPDOC\n";
echo "Count: " . count($categories['malformed_phpdoc']) . "\n";
echo "Controllers:\n";
foreach ($categories['malformed_phpdoc'] as $ctrl) {
    echo "  - " . $ctrl['class'] . " (" . $ctrl['path'] . ")\n";
}

echo "\n\n=== SAMPLES ===\n";

echo "\nSample from Category 1 (Has PHPDoc):\n";
foreach ($samples['has_phpdoc'] as $sample) {
    echo "\n--- " . $sample['class'] . " (" . $sample['path'] . ") ---\n";
    foreach (array_slice($sample['lines'], 0, 20) as $i => $line) {
        echo ($i + 1) . ": " . $line . "\n";
    }
}

echo "\nSample from Category 2 (Missing PHPDoc):\n";
foreach ($samples['missing_phpdoc'] as $sample) {
    echo "\n--- " . $sample['class'] . " (" . $sample['path'] . ") ---\n";
    foreach (array_slice($sample['lines'], 0, 20) as $i => $line) {
        echo ($i + 1) . ": " . $line . "\n";
    }
}

echo "\nSample from Category 3 (Malformed PHPDoc):\n";
foreach ($samples['malformed_phpdoc'] as $sample) {
    echo "\n--- " . $sample['class'] . " (" . $sample['path'] . ") ---\n";
    foreach (array_slice($sample['lines'], 0, 20) as $i => $line) {
        echo ($i + 1) . ": " . $line . "\n";
    }
}
?>
