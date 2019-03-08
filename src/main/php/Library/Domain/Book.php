<?php

namespace Library\Domain;

final class Book
{
    private $title;

    private $author;

    private $isbnNumber;

    private $cover;

    private $year;

    private $description;

    public function __construct(BookBuilder $builder)
    {
        $this->title = $builder->getTitle();
        $this->author = $builder->getAuthor();
        $this->isbnNumber = $builder->getIsbnNumber();
        $this->cover = $builder->getCover();
        $this->year = $builder->getYear();
        $this->description = $builder->getDescription();
    }

    public function getTitle(): string
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
