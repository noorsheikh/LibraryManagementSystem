<?php

use Silex\Provider\DoctrineServiceProvider;

$rootDir = __DIR__;

$app->register(new DoctrineServiceProvider(), array(
    "db.options" => array(
        "driver" => "pdo_sqlite",
        "path" => $rootDir . "/../data/library.db"
    )
));
