<?php

namespace Library\Repository;

use Doctrine\DBAL\Connection;

class LibraryRepository
{

    private $connection;

    public function __construct(Connection $connection) {
        $this->connection = $connection;
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
