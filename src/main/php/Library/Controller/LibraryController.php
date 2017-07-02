<?php

namespace Library\Controller;

use Silex\Application;
use Silex\Api\ControllerProviderInterface;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;

use Library\Domain\Book;
use Library\Domain\BookBuilder;
use Library\Domain\Copy;
use Library\Domain\CopyBuilder;
use Library\Domain\Borrower;
use Library\Domain\BorrowerBuilder;
use Library\Persistence\LibraryRepository;

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

        $this->controller->post("/add-book", function (Request $request) use ($app) {
            try {
                $book = BookBuilder::instance()
                            ->withTitle($request->request->get('title'))
                            ->withAuthor($request->request->get('author'))
                            ->withIsbnNumber($request->request->get('isbn_number'))
                            ->build();

                if ($book instanceof Book) {
                    $bookId = $this->repository->addBook($book);
                }

                $bookCopies = $request->request->get('copies');

                if (!empty($bookCopies)) {
                    foreach ($bookCopies as $copy) {
                        $copy = CopyBuilder::instance()
                                    ->withIsbnNumber($copy['isbn_number'])
                                    ->withCopyNumber($copy['copy_number'])
                                    ->withBookId($bookId)
                                    ->build();

                        if ($copy instanceof Copy) {
                            $this->repository->addCopy($copy);
                        }
                    }
                }

                return $app->json("Book added successfully", 201);

            } catch (\Exception $exception) {
                throw new $exception;
            }

        });

        $this->controller->get("/books", function ($app) {
            try {
                $books = $this->repository->getBooks();

                var_dump("Hello World!");

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

        $this->controller->post("/add-borrower", function (Request $request) use ($app) {
            try {
                $borrower = BorrowerBuilder::instance()
                                ->withBorrowerName($request->request->get('borrower_name'))
                                ->withBorrowerMembershipId($request->request->get('borrower_membership_id'))
                                ->withStatus($request->request->get('status'))
                                ->build();

                if ($borrower instanceof Borrower) {
                    $this->repository->addBorrower($borrower);
                }

                return $app->json("Borrower added sucessfully", 201);

            } catch (\Exception $exception) {
                throw new $exception;
            }
        });

        $this->controller->put("/update-borrower/{id}", function (Request $request, $id) use ($app) {
            try {
                $borrower = BorrowerBuilder::instance()
                                ->withBorrowerName($request->request->get('borrower_name'))
                                ->withBorrowerMembershipId($request->request->get('borrower_membership_id'))
                                ->withStatus($request->request->get('status'))
                                ->build();

                if ($borrower instanceof Borrower) {
                    $this->repository->updateBorrower($borrower, $id);
                }

                return $app->json("Borrower updated successfully", 201);

            } catch (\Exception $exception) {
                throw new $exception;
            }
        });

        return $this->controller;
    }
}
