<?php

namespace Library\Fixture;

use Silex\Application;

use Library\Domain\Book;
use Library\Domain\BookBuilder;
use Library\Domain\Copy;
use Library\Domain\CopyBuilder;
use Library\Persistence\LibraryRepository;

use Faker\Factory;

class LibraryDataFixture
{
    private $faker;

    private $repository;

    public function __construct(LibraryRepository $libraryRepository)
    {
        $this->faker = Factory::create();
        $this->repository = $libraryRepository;
    }

    public function process($totalBooks, $totalCopies)
    {
        $this->addBooks($totalBooks, $totalCopies);
    }

    private function addBooks($totalBooks, $totalCopies)
    {
        try {
            for ($i = 0; $i < $totalBooks; $i++) {
                $isbnNumber = $this->faker->isbn10;

                $book = BookBuilder::instance()
                    ->withTitle($this->faker->sentence(3))
                    ->withAuthor($this->faker->name)
                    ->withIsbnNumber($isbnNumber)
                    ->withCover($this->faker->imageUrl(640, 480, 'technics', true))
                    ->withYear($this->faker->year('now'))
                    ->withDescription($this->faker->text(300))
                    ->build()
                ;

                if ($book instanceof Book) {
                    $bookId = $this->repository->addBook($book);
                }

                if (!empty($totalCopies)) {
                    for ($j = 0; $j < $totalCopies; $j++) {
                        $copy = CopyBuilder::instance()
                            ->withIsbnNumber($isbnNumber)
                            ->withCopyNumber($this->faker->ean8)
                            ->withBookId($bookId)
                            ->build()
                        ;

                        if ($copy instanceof Copy) {
                            $this->repository->addCopy($copy);
                        }
                    }
                }
            }
        } catch (\Exception $exception) {
            throw new $exception;
        }
    }
}
