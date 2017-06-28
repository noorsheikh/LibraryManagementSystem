<?php

ini_set("display_errors", 1);

$rootDir = __DIR__;

require_once $rootDir . "/vendor/autoload.php";
require $rootDir . "/src/Domain/Book.php";
require $rootDir . "/src/Domain/BookBuilder.php";
require $rootDir . "/src/Domain/Copy.php";
require $rootDir . "/src/Domain/CopyBuilder.php";
require $rootDir . "/src/Domain/Borrower.php";
require $rootDir . "/src/Domain/BorrowerBuilder.php";
require $rootDir . "/src/Repository/LibraryRepository.php";
require $rootDir . "/src/Controller/LibraryController.php";

$app = require $rootDir . "/app/app.php";

$app->run();
