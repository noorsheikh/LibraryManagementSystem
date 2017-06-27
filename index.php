<?php

ini_set("display_errors", 1);

$rootDir = __DIR__;

require_once $rootDir . "/vendor/autoload.php";
require $rootDir . "/src/Repository/LibraryRepository.php";
require $rootDir . "/src/Controller/LibraryController.php";

$app = require $rootDir . "/app/app.php";

$app->run();
