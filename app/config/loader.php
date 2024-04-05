<?php

use Phalcon\Autoload\Loader;

$loader = new Loader();

/**
 * Register Namespaces
 */
$loader->setNamespaces([
    'Test\Models' => APP_PATH . '/common/models/',
    'Test'        => APP_PATH . '/common/library/',
]);

/**
 * Register module classes
 */
$loader->setClasses([
    'Test\Modules\Frontend\Module' => APP_PATH . '/modules/frontend/Module.php',
    'Test\Modules\Cli\Module'      => APP_PATH . '/modules/cli/Module.php'
]);

$loader->register();
