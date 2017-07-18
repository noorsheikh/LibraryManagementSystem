<?php

namespace Library\Domain;

final class BookBuilder
{
    private $title;

    private $author;

    private $isbnNumber;

    public static $instance;

    public static function instance()
    {
        return new static;
    }

    public function withTitle($title)
    {
        if (empty($title)) {
            $this->title = "";
        } else {
            $this->title = $title;
        }

        return $this;

    }

    public function withAuthor($author)
    {
        if (empty($author)) {
            $this->author = "";
        } else {
            $this->author = $author;
        }

        return $this;

    }

    public function withIsbnNumber($isbnNumber)
    {
        if (empty($isbnNumber)) {
            $this->isbnNumber = "";
        } else {
            $this->isbnNumber = $isbnNumber;
        }

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
}
