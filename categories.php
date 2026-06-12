<?php
require __DIR__.'/vendor/autoload.php';
$app = require_once __DIR__.'/bootstrap/app.php';
$app->make('Illuminate\Contracts\Console\Kernel')->bootstrap();
echo "Categories: " . App\Models\Category::count() . "\n";
App\Models\Category::all()->each(fn($c) => echo "- {$c->name}\n");