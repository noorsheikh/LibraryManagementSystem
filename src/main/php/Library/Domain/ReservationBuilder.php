<?php
namespace Library\Domain;

final class ReservationBuilder
{
    private $borrowerMembershipId;

    private $isbnNumber;

    private $reservationDate;

    private $redeemedDate;

    private $borrowerId;

    private $bookId;

    public static $instance;

    public static function instance()
    {
        return new static;
    }

    public function withBorrowerMembershipId(string $borrowerMembershipId): ReservationBuilder
    {
        $this->borrowerMembershipId = $borrowerMembershipId;
        return $this;
    }

    public function withIsbnNumber(string $isbnNumber): ReservationBuilder
    {
        $this->isbnNumber = $isbnNumber;
        return $this;
    }

    public function withReservationDate(string $reservationDate): ReservationBuilder
    {
        $this->reservationDate = $reservationDate;
        return $this;
    }

    public function withRedeemedDate(string $redeemedDate): ReservationBuilder
    {
        $this->redeemedDate = $redeemedDate;
        return $this;
    }

    public function withBorrowerId(int $borrowerId): ReservationBuilder
    {
        $this->borrowerId = $borrowerId;
        return $this;
    }

    public function withBookId(int $bookId): ReservationBuilder
    {
        $this->bookId = $bookId;
        return $this;
    }

    public function build(): Reservation
    {
        return new Reservation($this);
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
