<?php

# enable PHP 7 strict declaration
#declare(strict_types=1);

ini_set('display_errors', '0');

$rootDir = __DIR__;

require_once $rootDir . "/vendor/autoload.php";

$app = require $rootDir . "/app/app.php";

$app->run();
