<?php

namespace Library\Domain;

final class Loan
{
    private $borrowerMembershipId;

    private $isbnNumber;

    private $dateOut;

    private $dateIn;

    private $copyNumber;

    private $copyId;

    private $borrowerId;

    public function __construct(LoanBuilder $builder)
    {
        $this->borrowerMembershipId = $builder->getBorrowerMembershipId();
        $this->isbnNumber = $builder->getIsbnNumber();
        $this->dateOut = $builder->getDateOut();
        $this->dateIn = $builder->getDateIn();
        $this->copyNumber = $builder->getCopyNumber();
        $this->copyId = $builder->getCopyId();
        $this->borrowerId = $builder->getBorrowerId();
    }

    public function getBorrowerMembershipId()
    {
        return $this->borrowerMembershipId;
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

    public function getCopyId()
    {
        return $this->copyId;
    }

    public function getBorrowerId()
    {
        return $this->borrowerId;
    }
}
