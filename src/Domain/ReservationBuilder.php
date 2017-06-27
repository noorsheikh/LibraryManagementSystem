<?php

namespace Library\Domain;

final class ReservationBuilder
{
    private $borrowerId;

    private $isbnNumber;

    private $reservationDate;

    private $redeemedDate;

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

    public function build()
    {
        return new Reservation($this);
    }

    public function getBorrowerId()
    {
        return $this->borrowerId;
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
}
