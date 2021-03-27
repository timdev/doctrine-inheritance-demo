<?php
declare(strict_types=1);

use Doctrine\ORM\Tools\Setup;

require_once 'vendor/autoload.php';

$conn = [
    'driver' => 'pdo_sqlite',
    'path' => __DIR__ . '/demo.sqlite'
];

// Create a simple "default" Doctrine ORM configuration for Annotations
$isDevMode = true;
$proxyDir = null;
$cache = null;
$useSimpleAnnotationReader = false;

$config = Setup::createAnnotationMetadataConfiguration(
    [__DIR__ . '/src'],
    $isDevMode,
    $proxyDir,
    $cache,
    $useSimpleAnnotationReader
);

return \Doctrine\ORM\EntityManager::create($conn, $config);
