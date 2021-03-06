<?php

require_once 'config/config.php';
require_once 'vendor/autoload.php';

use Pecee\SimpleRouter\SimpleRouter;

$whoops = new \Whoops\Run;
$whoops->pushHandler(new \Whoops\Handler\PrettyPageHandler);
$whoops->register();

/* Load external routes file */
require_once 'routes/routes.php';

/**
 * The default namespace for route-callbacks, so we don't have to specify it each time.
 * Can be overwritten by using the namespace config option on your routes.
 */

SimpleRouter::setDefaultNamespace('\app\Controllers');

// Start the routing
SimpleRouter::start();
