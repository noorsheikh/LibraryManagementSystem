<?php

namespace Library\Domain;

final class BookBuilder
{
    private $title;

    private $author;

    private $isbnNumber;

    private $cover;

    private $year;

    private $description;

    public static $instance;

    public static function instance()
    {
        return new static;
    }

    public function withTitle($title)
    {
        if (empty($title)) {
            throw new \Exception("Title cannot be empty");
        }

        $this->title = $title;

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
            throw new \Exception("ISBN number cannot be empty");
        }

        $this->isbnNumber = $isbnNumber;

        return $this;
    }

    public function withCover($cover)
    {
        if (empty($cover)) {
            $this->cover = "";
        } else {
            $this->cover = $cover;
        }

        return $this;
    }

    public function withYear($year)
    {
        if (empty($year)) {
            $this->year = "";
        } else {
            $this->year = $year;
        }

        return $this;
    }

    public function withDescription($description)
    {
        if (empty($description)) {
            $this->description = "";
        } else {
            $this->description = $description;
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

    public function getCover()
    {
        return $this->cover;
    }

    public function getYear()
    {
        return $this->year;
    }

    public function getDescription()
    {
        return $this->description;
    }
}
