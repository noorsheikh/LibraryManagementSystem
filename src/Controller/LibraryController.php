<?php

namespace Library\Controller;

use Silex\Application;
use Silex\Api\ControllerProviderInterface;
use Library\Repository\LibraryRepository;

class LibraryController implements ControllerProviderInterface
{

    private $controller;

    private $repository;

    public function __construct(Application $app)
    {
        $this->controller = $app['controllers_factory'];
        $this->repository = new LibraryRepository($app['db']);

    }

    public function connect(Application $app)
    {

        $this->controller->get("/books", function (Application $app) {
            try {

                $books = $this->repository->getBooks();

                return $app->json($books);

            } catch (\Exception $exception) {
                throw new $exception;
            }
        });

        $this->controller->get("/book/{id}", function ($id) use ($app) {
            try {

                $book = $this->repository->getBook($id);

                return $app->json($book);

            } catch (\Exception $exception) {
                throw new $exception;
            }
        });

        $this->controller->get("/available-books", function (Application $app) {
            try {

                $availableBooks = $this->repository->listAvailableBooks();

                return $app->json($availableBooks);

            } catch (\Exception $exception) {
                throw new $exception;
            }
        });

        return $this->controller;
    }
}
