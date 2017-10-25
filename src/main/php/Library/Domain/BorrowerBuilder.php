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

    public function withBorrowerName($borrowerName)
    {
        if (empty($borrowerName)) {
            $this->borrowerName = "";
        } else {
            $this->borrowerName = $borrowerName;
        }

        return $this;
    }

    public function withBorrowerMembershipId($borrowerMembershipId)
    {
        if (empty($borrowerMembershipId)) {
            $this->borrowerMembershipId = "";
        } else {
            $this->borrowerMembershipId = $borrowerMembershipId;
        }

        return $this;
    }

    public function withStatus($status)
    {
        if (empty($status)) {
            $this->status = "";
        } else {
            $this->status = $status;
        }

        return $this;
    }

    public function build()
    {
        return new Borrower($this);
    }

    public function getBorrowerName()
    {
        return $this->borrowerName;
    }

    public function getBorrowerMembershipId()
    {
        return $this->borrowerMembershipId;
    }

    public function getStatus()
    {
        return $this->status;
    }
}
