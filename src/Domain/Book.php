<?php

namespace Library\Domain;

final class Book
{
    private $title;

    private $author;

    private $isbnNumber;

    private $isReserved;

    public function __construct(BookBuilder $builder)
    {
        $this->title = $builder->getBuilder();
        $this->author = $builder->getAuthor();
        $this->isbnNumber = $builder->getIsbnNumber();
        $this->isReserved = $builder->getIsReserved();
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

    public function getIsReserved()
    {
        return $this->isReserved;
    }
}
