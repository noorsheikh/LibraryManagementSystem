<?php

ini_set("display_errors", 1);

$rootDir = __DIR__;

require_once $rootDir . "/vendor/autoload.php";

$app = require_once $rootDir . "/app/app.php";

$app->run();
