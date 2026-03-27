<?php
require __DIR__ . '/vendor/autoload.php';
$app = require __DIR__ . '/bootstrap/app.php';

$kernel = $app->make(Illuminate\Contracts\Console\Kernel::class);
$kernel->bootstrap();

use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\DB;

try {
    // Run migrations
    $exitCode = Artisan::call('migrate', ['--no-interaction' => true]);
    echo "Migration exit code: $exitCode\n";
    
    // Check if sessions table exists
    if (Schema::hasTable('sessions')) {
        $count = DB::table('sessions')->count();
        echo "✓ Sessions table exists with $count rows\n";
    } else {
        echo "✗ Sessions table NOT found\n";
    }
} catch (Exception $e) {
    echo "Error: " . $e->getMessage() . "\n";
}
