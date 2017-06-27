<?php

namespace Library\Domain;

final class BorrowerBuilder
{
    private $isbnNumber;

    private $copyNumber;

    private $status;

    public static $instance;

    public static function instance()
    {
        return new static;
    }

    public withIsbnNumber($isbnNumber)
    {
        $this->isbnNumber = $isbnNumber;
        return $this;
    }

    public withCopyNumber($copyNumber)
    {
        $this->copyNumber = $copyNumber;
        return $this;
    }

    public withStatus($status)
    {
        $this->status = $status;
        return $this;
    }

    public function build()
    {
        return new Borrower($this);
    }

    public function getIsbnNumber()
    {
        return $this->isbnNumber;
    }

    public function getCopyNumber()
    {
        return $this->copyNumber;
    }

    public function getStatus()
    {
        return $this->status;
    }
}
