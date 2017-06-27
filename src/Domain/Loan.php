<?php

namespace Library\Domain;

final class Loan
{
    private $borrowerId;

    private $isbnNumber;

    private $dateOut;

    private $dateIn;

    private $copyNumber;

    public function __construct(LoanBuilder $builder)
    {
        $this->borrowerId = $builder->getBorrowerId();
        $this->isbnNumber = $builder->getIsbnNumber();
        $this->dateOut = $builder->getDateOut();
        $this->dateIn = $builder->getDateIn();
        $this->copyNumber = $builder->getCopyNumber();
    }

    public function getBorrowerId()
    {
        return $this->borrowerId;
    }

    public function getIsbnNumber()
    {
        return $this->isbnNumber;
    }

    public function getDateOut()
    {
        return $this->dateOut;
    }

    public function getDateIn()
    {
        return $this->dateIn;
    }

    public function getCopyNumber()
    {
        return $this->copyNumber;
    }
}
