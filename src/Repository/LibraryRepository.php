<?php

namespace Library\Repository;

use Doctrine\DBAL\Connection;

use Library\Domain\Book;

class LibraryRepository
{

    private $connection;

    public function __construct(Connection $connection) {
        $this->connection = $connection;
    }

    public function addBook(Book $book)
    {
        try {
            $this->connection()->insert(
                'book',
                array(
                    'title' => $book->getTitle(),
                    'author' => $book->getAuthor(),
                    'isbn_number' => $book->getIsbnNumber(),
                    'is_reserved' => $book->getIsReserved()
                )
            );
        } catch (\Exception $exception) {
            throw new $exception;
        }
    }

    public function getBooks()
    {
        $stmt = $this->connection()->prepare("SELECT * FROM book");
        $stmt->execute();
        $books = $stmt->fetchAll();

        return $books;

    }

    public function getBook($id)
    {
        $stmt = $this->connection()->prepare("SELECT * FROM book WHERE id = ?");
        $stmt->bindValue(1, $id);
        $stmt->execute();

        $book = $stmt->fetch();

        return $book;
    }

    public function listAvailableBooks()
    {
        $stmt = $this->connection()->prepare("SELECT * FROM book where is_reserved = ?");
        $stmt->bindValue(1, 0);
        $stmt->execute();

        $availableBooks = $stmt->fetchAll();

        return $availableBooks;

    }

    private function connection()
    {
        return $this->connection;
    }

}
