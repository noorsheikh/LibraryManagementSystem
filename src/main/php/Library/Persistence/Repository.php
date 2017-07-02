<?php

namespace Library\Persistence;

use Library\Domain\Book;
use Library\Domain\Copy;
use Library\Domain\Borrower;

interface Repository
{
    public function addBook(Book $book);

    public function getBooks();

    public function getBook($id);

    public function listAvailableBooks();

    public function addCopy(Copy $copy);

    public function addBorrower(Borrower $borrower);

    public function updateBorrower(Borrower $borrower, $id);
}
