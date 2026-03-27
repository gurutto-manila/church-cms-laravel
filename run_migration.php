<?php
// Quick migration script
require __DIR__ . '/bootstrap/autoload.php';
$app = require __DIR__ . '/bootstrap/app.php';

$kernel = $app->make(Illuminate\Contracts\Console\Kernel::class);
$kernel->bootstrap();

try {
    // Run migrations
    Artisan::call('migrate', ['--no-interaction' => true]);
    echo "✓ Migrations completed\n";

    // Check if sessions table exists
    if (Schema::hasTable('sessions')) {
        echo "✓ Sessions table exists\n";
    } else {
        echo "✗ Sessions table NOT found\n";
    }
} catch (Exception $e) {
    echo "✗ Error: " . $e->getMessage() . "\n";
}
