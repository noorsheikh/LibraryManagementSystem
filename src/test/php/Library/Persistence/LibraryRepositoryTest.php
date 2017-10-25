<?php

namespace Library\Persistence;

use Silex\WebTestCase;

use Library\Domain\Book;
use Library\Domain\BookBuilder;

class LibraryRepositoryTest extends WebTestCase
{
    const BASE_DIR = __DIR__;
    const TITLE = 'title';
    const AUTHOR = 'author';
    const ISBN_NUMBER = '123456';

    public function createApplication()
    {
        return require self::BASE_DIR . "/../../../../../app/app.php";
    }

    /**
     * @test
     */
    public function itShouldAddNewBook()
    {
        $connection = $this->getConnectionMock();
        $repository = new LibraryRepository($connection);

        $book = BookBuilder::instance()
            ->withTitle(self::TITLE)
            ->withAuthor(self::AUTHOR)
            ->withIsbnNumber(self::ISBN_NUMBER)
            ->build();

        $connection
            ->expects($this->once())
            ->method("insert");

        $repository->addBook($book);
    }

    private function getConnectionMock()
    {
        $connectionMock = $this->getMockBuilder("\Doctrine\DBAL\Connection")
            ->disableOriginalConstructor()
            ->getMock();

        return $connectionMock;
    }
}
