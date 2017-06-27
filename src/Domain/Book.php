<?php

namespace Library\Domain;

class Book
{

    private $title;

    private $book;

    private $isbnNumber;

    private $isReserved;

    public function setTitle($title)
    {
        $this->title = $title;
    }

    public function getTitle()
    {
        return $this->title;
    }

    public function setBook($book)
    {
        $this->book = $book;
    }

    public function getBook()
    {
        return $this->book;
    }

    public function setIsbnNumber($isbnNumber)
    {
        $this->isbnNumber = $isbnNumber;
    }

    public function getIsbnNumber()
    {
        return $this->isbnNumber;
    }

    public function setIsReserved($isReserved)
    {
        $this->isReserved = $isReserved;
    }

    public function getIsReserved()
    {
        return $this->isReserved;
    }

}
