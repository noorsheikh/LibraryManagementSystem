<?php

use Silex\Application;
use Library\Controller\LibraryController;

$app = new Application();

require "config.php";

$app->mount("/library", new LibraryController($app));

return $app;
