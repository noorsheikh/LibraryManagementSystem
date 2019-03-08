<?php

namespace Library\Domain;

final class BorrowerBuilder
{
    private $borrowerName;

    private $borrowerMembershipId;

    private $status;

    public static $instance;

    public static function instance()
    {
        return new static;
    }

    public function withBorrowerName(string $borrowerName): BorwerBuilder
    {
        if (empty($borrowerName)) {
            $this->borrowerName = "";
        } else {
            $this->borrowerName = $borrowerName;
        }

        return $this;
    }

    public function withBorrowerMembershipId(string $borrowerMembershipId): BorwerBuilder
    {
        if (empty($borrowerMembershipId)) {
            $this->borrowerMembershipId = "";
        } else {
            $this->borrowerMembershipId = $borrowerMembershipId;
        }

        return $this;
    }

    public function withStatus(int $status): BorwerBuilder
    {
        if (empty($status)) {
            $this->status = "";
        } else {
            $this->status = $status;
        }

        return $this;
    }

    public function build(): Borrower
    {
        return new Borrower($this);
    }

    public function getBorrowerName(): string
    {
        return $this->borrowerName;
    }

    public function getBorrowerMembershipId(): string
    {
        return $this->borrowerMembershipId;
    }

    public function getStatus(): int
    {
        return $this->status;
    }
}
