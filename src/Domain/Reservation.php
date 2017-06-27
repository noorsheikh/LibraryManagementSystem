<?php

namespace Library\Domain;

final class Reservation
{
    private $borrowerId;

    private $isbnNumber;

    private $reservationDate;

    private $redeemedDate;

    public function __construct(ReservationBuilder $builder)
    {
        $this->borrowerId = $builder->getBorrowerId();
        $this->isbnNumber = $builder->getIsbnNumber();
        $this->reservationDate = $builder->getReservationDate();
        $this->redeemedDate = $builder->getRedeemedDate();
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
