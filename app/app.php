<?php

use Silex\Application;
use Library\Controller\LibraryController;

$app = new Application();

require "config.php";
require "helper/request_body_parser.php";

$app->mount("/library", new LibraryController($app));

return $app;
