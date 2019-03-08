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

    public function withBorrowerMembershipId(string $borrowerMembershipId): LoadBuilder
    {
        $this->borrowerMembershipId = $borrowerMembershipId;
        return $this;
    }

    public function withIsbnNumber(string $isbnNumber): LoadBuilder
    {
        $this->isbnNumber = $isbnNumber;
        return $this;
    }

    public function withDateOut(string $dateOut): LoadBuilder
    {
        $this->dateOut = $dateOut;
        return $this;
    }

    public function withDateIn(string $dateIn): LoadBuilder
    {
        $this->dateIn = $dateIn;
        return $this;
    }

    public function withCopyNumber(int $copyNumber): LoadBuilder
    {
        $this->copyNumber = $copyNumber;
        return $this;
    }

    public function withCopyId(int $copyId): LoadBuilder
    {
        $this->copyId = $copyId;
        return $this;
    }

    public function withBorrowerId(int $borrowerId): LoadBuilder
    {
        $this->borrowerId = $borrowerId;
        return $this;
    }

    public function build(): Loan
    {
        return new Loan($this);
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
