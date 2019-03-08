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

    public function withTitle($title): BookBuilder
    {
        if (empty($title)) {
            throw new \Exception("Title cannot be empty");
        }

        $this->title = $title;

        return $this;
    }

    public function withAuthor(string $author): BookBuilder
    {
        if (empty($author)) {
            $this->author = "";
        } else {
            $this->author = $author;
        }

        return $this;
    }

    public function withIsbnNumber(string $isbnNumber): BookBuilder
    {
        if (empty($isbnNumber)) {
            throw new \Exception("ISBN number cannot be empty");
        }

        $this->isbnNumber = $isbnNumber;

        return $this;
    }

    public function withCover(string $cover): BookBuilder
    {
        if (empty($cover)) {
            $this->cover = "";
        } else {
            $this->cover = $cover;
        }

        return $this;
    }

    public function withYear(string $year): BookBuilder
    {
        if (empty($year)) {
            $this->year = "";
        } else {
            $this->year = $year;
        }

        return $this;
    }

    public function withDescription(string $description): BookBuilder
    {
        if (empty($description)) {
            $this->description = "";
        } else {
            $this->description = $description;
        }

        return $this;
    }

    public function build(): Book
    {
        return new Book($this);
    }

    public function gettitle(): string
    {
        return $this->title;
    }

    public function getAuthor(): string
    {
        return $this->author;
    }

    public function getIsbnNumber(): string
    {
        return $this->isbnNumber;
    }

    public function getCover(): string
    {
        return $this->cover;
    }

    public function getYear(): int
    {
        return $this->year;
    }

    public function getDescription(): string
    {
        return $this->description;
    }
}
