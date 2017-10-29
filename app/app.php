<?php

use Silex\Application;
use Library\Controller\LibraryController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;

$app = new Application();

require "config.php";
require "helper/request_body_parser.php";

$app->mount("/library", new LibraryController($app));

$app->after(function (Request $request, Response $response) {
    $response->headers->set('Access-Control-Allow-Origin', '*');
    $response->headers->set('Access-Control-Allow-Headers', 'Authorization');
});

return $app;
