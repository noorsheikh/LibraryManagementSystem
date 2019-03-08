<?php

namespace Library\Persistence;

use Library\Domain\Book;
use Library\Domain\Copy;
use Library\Domain\Borrower;

interface Repository
{
    public function addBook(Book $book): int;

    public function getBooks(): array;

    public function getBook(int $id): array;

    public function listAvailableBooks(): array;

    public function addCopy(Copy $copy): void;

    public function addBorrower(Borrower $borrower): void;

    public function updateBorrower(Borrower $borrower, int $id): void;
}
