<?php

namespace Library\Persistence;

use Silex\WebTestCase;

use Library\Domain\BookBuilder;
use Library\Domain\CopyBuilder;
use Library\Domain\BorrowerBuilder;

class LibraryRepositoryTest extends WebTestCase
{
    const BASE_DIR = __DIR__;
    const BOOK_ID = 1;
    const TITLE = 'title';
    const AUTHOR = 'author';
    const ISBN_NUMBER = '123456';
    const COPY_NUMBER = 2;
    const BORROWER_ID = 1;
    const BORROWER_NAME = 'noor';
    const MEMBERSHIP_ID = 12345;
    const MEMBERSHIP_STATUS = 1;
    const COVER = 'cover image';
    const YEAR = 20187;
    const DESCRIPTION = "This is a sample description.";

    public function createApplication()
    {
        return require self::BASE_DIR . "/../../../../../app/app.php";
    }

    /**
     * @test
     */
    public function itShouldAddANewBook()
    {
        $connection = $this->getConnectionMock();
        $repository = new LibraryRepository($connection);

        $book = BookBuilder::instance()
            ->withTitle(self::TITLE)
            ->withAuthor(self::AUTHOR)
            ->withIsbnNumber(self::ISBN_NUMBER)
            ->withCover(self::COVER)
            ->withYear(self::YEAR)
            ->withDescription(self::DESCRIPTION)
            ->build();

        $connection
            ->expects($this->once())
            ->method("insert");

        $repository->addBook($book);
    }

    /**
     * @test
     */
    public function itShouldReturnAllBooks()
    {
        $connection = $this->getConnectionMock();
        $repository = new LibraryRepository($connection);

        $connection
            ->expects($this->once())
            ->method("prepare")
            ->will($this->returnValue($this->getStatementMock()));

        $repository->getBooks();
    }

    /**
     * @test
     */
    public function itShouldReturnASingleBook()
    {
        $connection = $this->getConnectionMock();
        $repository = new LibraryRepository($connection);

        $connection
            ->expects($this->once())
            ->method("prepare")
            ->will($this->returnValue($this->getStatementMock()));

        $repository->getBook(self::BOOK_ID);
    }

    /**
     * @test
     */
    public function itShouldListAvailableBooks()
    {
        $connection = $this->getConnectionMock();
        $repository = new LibraryRepository($connection);

        $connection
            ->expects($this->once())
            ->method("prepare")
            ->will($this->returnValue($this->getStatementMock()));

        $repository->listAvailableBooks();
    }

    /**
     * @test
     */
    public function itShouldAddACopyForBook()
    {
        $connection = $this->getConnectionMock();
        $repository = new LibraryRepository($connection);

        $copy = CopyBuilder::instance()
            ->withIsbnNumber(self::ISBN_NUMBER)
            ->withCopyNumber(self::COPY_NUMBER)
            ->withBookId(self::BOOK_ID)
            ->build();

        $connection
            ->expects($this->once())
            ->method("insert");

        $repository->addCopy($copy);
    }

    /**
     * @test
     */
    public function itShouldAddBorrower()
    {
        $connection = $this->getConnectionMock();
        $repository = new LibraryRepository($connection);

        $borrower = BorrowerBuilder::instance()
            ->withBorrowerName(self::BORROWER_NAME)
            ->withBorrowerMembershipId(self::MEMBERSHIP_ID)
            ->withStatus(self::MEMBERSHIP_STATUS)
            ->build();

        $connection
            ->expects($this->once())
            ->method("insert");

        $repository->addBorrower($borrower);
    }

    /**
     * @test
     */
    public function itShouldUpdateAnExistingBorrower()
    {
        $connection = $this->getConnectionMock();
        $repository = new LibraryRepository($connection);

        $borrower = BorrowerBuilder::instance()
            ->withBorrowerName(self::BORROWER_NAME)
            ->withBorrowerMembershipId(self::MEMBERSHIP_ID)
            ->withStatus(self::MEMBERSHIP_STATUS)
            ->build();

        $connection
            ->expects($this->once())
            ->method("update");

        $repository->updateBorrower($borrower, self::BORROWER_ID);
    }

    private function getConnectionMock()
    {
        $connectionMock = $this->getMockBuilder("\Doctrine\DBAL\Connection")
            ->disableOriginalConstructor()
            ->getMock();

        return $connectionMock;
    }

    private function getStatementMock()
    {
        $statementMock = $this->getMockBuilder("\Doctrine\DBAL\Driver\Statement")
            ->disableOriginalConstructor()
            ->getMock();

        return $statementMock;
    }
}
