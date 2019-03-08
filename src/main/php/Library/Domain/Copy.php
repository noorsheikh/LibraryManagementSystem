<?php

namespace Library\Domain;

final class Copy
{
    private $isbnNumber;

    private $copyNumber;

    private $bookId;

    public function __construct(CopyBuilder $builder)
    {
        $this->isbnNumber = $builder->getIsbnNumber();
        $this->copyNumber = $builder->getCopyNumber();
        $this->bookId = $builder->getBookId();
    }

    public function getIsbnNumber(): string
    {
        return $this->isbnNumber;
    }

    public function getCopyNumber(): int
    {
        return $this->copyNumber;
    }

    public function getBookId(): int
    {
        return $this->bookId;
    }
}
