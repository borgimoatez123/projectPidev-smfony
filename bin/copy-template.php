<?php

$sourceDir = __DIR__ . '/../assets/visa-immigration-website-template';
$targetDir = __DIR__ . '/../public/assets';

// Create directories if they don't exist
$dirs = ['css', 'js', 'img', 'lib'];
foreach ($dirs as $dir) {
    if (!is_dir($targetDir . '/' . $dir)) {
        mkdir($targetDir . '/' . $dir, 0777, true);
    }
}

// Copy CSS files
copy($sourceDir . '/css/style.css', $targetDir . '/css/style.css');
copy($sourceDir . '/css/bootstrap.min.css', $targetDir . '/css/bootstrap.min.css');

// Copy JS files
copy($sourceDir . '/js/main.js', $targetDir . '/js/main.js');

// Copy lib files
$libFiles = [
    'animate/animate.min.css',
    'owlcarousel/assets/owl.carousel.min.css',
    'wow/wow.min.js',
    'easing/easing.min.js',
    'waypoints/waypoints.min.js',
    'owlcarousel/owl.carousel.min.js'
];

foreach ($libFiles as $file) {
    $dir = dirname($file);
    if (!is_dir($targetDir . '/lib/' . $dir)) {
        mkdir($targetDir . '/lib/' . $dir, 0777, true);
    }
    copy($sourceDir . '/lib/' . $file, $targetDir . '/lib/' . $file);
}

// Copy images
$imageFiles = glob($sourceDir . '/img/*');
foreach ($imageFiles as $file) {
    copy($file, $targetDir . '/img/' . basename($file));
}

echo "Template files copied successfully!\n"; 