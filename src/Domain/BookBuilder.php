<?php

namespace Library\Domain;

final class BookBuilder
{
    private $title;

    private $author;

    private $isbnNumber;

    private $isReserved;

    public static $instance;

    public static function instance()
    {
        return new static;
    }

    public function withTitle($title)
    {
        $this->title = $title;
        return $this;
    }

    public function withAuthor($author)
    {
        $this->author = $author;
        return $this;
    }

    public function withIsbnNumber($isbnNumber)
    {
        $this->isbnNumber = $isbnNumber;
        return $this;
    }

    public function withIsReserved($isReserved)
    {
        $this->isReserved = $isReserved;
        return $this;
    }

    public function build()
    {
        return new Book($this);
    }

    public function gettitle()
    {
        return $this->title;
    }

    public function getAuthor()
    {
        return $this->author;
    }

    public function getIsbnNumber()
    {
        return $this->isbnNumber;
    }

    public function getIsReserved()
    {
        return $this->isReserved;
    }
}
