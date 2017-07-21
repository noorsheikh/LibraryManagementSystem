<?php

use Silex\WebTestCase;
use Library\Controller\LibraryController;

class LibraryControllerTest extends WebTestCase
{
    const BASE_URL = "http://localhost:8888/LibraryManagementSystem/library";
    const BASE_DIR = __DIR__;

    public function createApplication()
    {
        $app = require self::BASE_DIR . "/../../../../../app/app.php";

        return $app;
    }

    public function setUp()
    {
        parent::setUp();
    }

    public function testBooksApi()
    {
        $client = $this->createClient();

        $client->request("GET", self::BASE_URL . "/books");

        $this->assertEquals($client->getResponse()->getStatusCode(), 200);
    }
}
