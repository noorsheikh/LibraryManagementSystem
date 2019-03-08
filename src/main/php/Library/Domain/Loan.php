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

    public function getBorrowerMembershipId(): string
    {
        return $this->borrowerMembershipId;
    }

    public function getIsbnNumber(): string
    {
        return $this->isbnNumber;
    }

    public function getDateOut(): string
    {
        return $this->dateOut;
    }

    public function getDateIn(): string
    {
        return $this->dateIn;
    }

    public function getCopyNumber(): int
    {
        return $this->copyNumber;
    }

    public function getCopyId(): int
    {
        return $this->copyId;
    }

    public function getBorrowerId(): int
    {
        return $this->borrowerId;
    }
}
