<?php

namespace Library\Domain;

final class LoanBuilder
{
    private $borrowerMembershipId;

    private $isbnNumber;

    private $dateOut;

    private $dateIn;

    private $copyNumber;

    private $copyId;

    private $borrowerId;

    public static $instance;

    public static function instance()
    {
        return new static;
    }

    public function withBorrowerMembershipId($borrowerMembershipId)
    {
        $this->borrowerMembershipId = $borrowerMembershipId;
        return $this;
    }

    public function withIsbnNumber($isbnNumber)
    {
        $this->isbnNumber = $isbnNumber;
        return $this;
    }

    public function withDateOut($dateOut)
    {
        $this->dateOut = $dateOut;
        return $this;
    }

    public function withDateIn($dateIn)
    {
        $this->dateIn = $dateIn;
        return $this;
    }

    public function withCopyNumber($copyNumber)
    {
        $this->copyNumber = $copyNumber;
        return $this;
    }

    public function withCopyId($copyId)
    {
        $this->copyId = $copyId;
        return $this;
    }

    public function withBorrowerId($borrowerId)
    {
        $this->borrowerId = $borrowerId;
        return $this;
    }

    public function build()
    {
        return new Loan($this);
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
