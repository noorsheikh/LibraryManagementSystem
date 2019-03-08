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

    public function getBorrowerMembershipId(): string
    {
        return $this->borrowerMembershipId;
    }

    public function getIsbnNumber(): string
    {
        return $this->isbnNumber;
    }

    public function getReservationDate(): string
    {
        return $this->reservationDate;
    }

    public function getRedeemedDate(): string
    {
        return $this->redeemedDate;
    }

    public function getBorrowerId(): int
    {
        return $this->borrowerId;
    }

    public function getBookId(): int
    {
        return $this->bookId;
    }
}
