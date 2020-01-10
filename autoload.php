<?php

use Composer\Autoload\ClassLoader;

$loader = new ClassLoader();
$loader->addPsr4('UksusoFF\\WebtreesModules\\Icons\\', __DIR__ . '/src');
$loader->register();
