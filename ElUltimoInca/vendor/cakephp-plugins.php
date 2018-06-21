<?php
$baseDir = dirname(dirname(__FILE__));
return [
    'plugins' => [
        'Bake' => $baseDir . '/vendor/cakephp/bake/',
        'DebugKit' => $baseDir . '/vendor/cakephp/debug_kit/',
        'LilHermit/Bootstrap4' => $baseDir . '/vendor/lilhermit/cakephp-plugin-bootstrap4/',
        'LilHermit/Toolkit' => $baseDir . '/vendor/lilhermit/cakephp-plugin-toolkit/',
        'Migrations' => $baseDir . '/vendor/cakephp/migrations/',
        'WyriHaximus/TwigView' => $baseDir . '/vendor/wyrihaximus/twig-view/'
    ]
];