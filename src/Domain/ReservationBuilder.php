<?php

namespace Library\Domain;

final class ReservationBuilder
{
    private $borrowerMembershipId;

    private $isbnNumber;

    private $reservationDate;

    private $redeemedDate;

    private $borrowerId;

    private $bookId

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

    public function withReservationDate($reservationDate)
    {
        $this->reservationDate = $reservationDate;
        return $this;
    }

    public function withRedeemedDate($redeemedDate)
    {
        $this->redeemedDate = $redeemedDate;
        return $this;
    }

    public function withBorrowerId($borrowerId)
    {
        $this->borrowerId = $borrowerId;
        return $this;
    }

    public function withBookId($bookId)
    {
        $this->bookId = $bookId;
        return $this;
    }

    public function build()
    {
        return new Reservation($this);
    }

    public function getBorrowerMembershipId()
    {
        return $this->borrowerMembershipId;
    }

    public function getIsbnNumber()
    {
        return $this->isbnNumber;
    }

    public function getReservationDate()
    {
        return $this->reservationDate;
    }

    public function getRedeemedDate()
    {
        return $this->redeemedDate;
    }

    public function getBorrowerId()
    {
        return $this->borrowerId;
    }

    public function getBookId()
    {
        return $this->bookId;
    }
}
