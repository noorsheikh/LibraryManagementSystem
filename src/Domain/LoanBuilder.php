<?php

namespace Library\Domain;

final class LoanBuilder
{
    private $borrowerId;

    private $isbnNumber;

    private $dateOut;

    private $dateIn;

    private $copyNumber;

    public static $instance;

    public static function instance()
    {
        return new static;
    }

    public function withBorrowerId($borrowerId)
    {
        $this->borrowerId = $borrowerId;
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

    public function build()
    {
        return new Loan($this);
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
