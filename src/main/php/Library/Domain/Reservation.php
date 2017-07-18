<?php

namespace Library\Domain;

final class Reservation
{
    private $borrowerMembershipId;

    private $isbnNumber;

    private $reservationDate;

    private $redeemedDate;

    private $borrowerId;

    private $bookId;

    public function __construct(ReservationBuilder $builder)
    {
        $this->borrowerMembershipId = $builder->getBorrowerMembershipId();
        $this->isbnNumber = $builder->getIsbnNumber();
        $this->reservationDate = $builder->getReservationDate();
        $this->redeemedDate = $builder->getRedeemedDate();
        $this->borrowerId = $builder->getBorrwerId();
        $this->bookId = $builder->getBookId();
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
