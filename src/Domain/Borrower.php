<?php

namespace Library\Domain;

final class Borrower
{
    private $isbnNumber;

    private $copyNumber;

    private $status;

    public function __construct(BorrowerBuilder $builder)
    {
        $this->isbnNumber = $builder->getIsbnNumber();
        $this->copyNumber = $builder->getCopyNumber();
        $this->status = $builder->getStatus();
    }

    public function getIsbnNumber()
    {
        return $this->isbnNumber;
    }

    public function getCopyNumber()
    {
        return $this->copyNumber;
    }

    public function getStatus()
    {
        return $this->status;
    }
}
