<?php

namespace Library\Domain;

final class Book
{
    private $title;

    private $author;

    private $isbnNumber;

    public function __construct(BookBuilder $builder)
    {
        $this->title = $builder->getTitle();
        $this->author = $builder->getAuthor();
        $this->isbnNumber = $builder->getIsbnNumber();
    }

    public function getTitle()
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
