<?php

namespace Library\Domain;

final class CopyBuilder
{
    private $isbnNumber;

    private $copyNumber;

    private $bookId;

    public static $instance;

    public static function instance()
    {
        return new static;
    }

    public function withIsbnNumber($isbnNumber)
    {
        $this->isbnNumber = $isbnNumber;
        return $this;
    }

    public function withCopyNumber($copyNumber)
    {
        $this->copyNumber = $copyNumber;
        return $this;
    }

    public function withBookId($bookId)
    {
        $this->bookId = $bookId;
        return $this;
    }

    public function build()
    {
        return new Copy($this);
    }

    public function getIsbnNumber()
    {
        return $this->isbnNumber;
    }

    public function getCopyNumber()
    {
        return $this->copyNumber;
    }

    public function getBookId()
    {
        return $this->bookId;
    }
}
