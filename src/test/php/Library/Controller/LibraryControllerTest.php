<?php

namespace Library\Controller;

use Silex\WebTestCase;

class LibraryControllerTest extends WebTestCase
{

    public function createApplication()
    {
        $app = require "/Users/noor.sheikh/Desktop/Learnings/PHP/SilexFramework/Projects/LibraryManagementSystem/app/app.php";

        return $this->app = $app;
    }

    public function setUp()
    {
        parent::setUp();
    }

    public function testBooksApi()
    {
        $client = $this->createClient();

        $client->request("GET", "http://localhost:8888/LibraryManagementSystem/library/books");

        $this->assertEquals($client->getResponse()->getStatusCode(), 200);
    }
}
