<?php

namespace Library\Domain;

final class CopyBuilder
{
    private $isbnNumber;

    private $copyNumber;

    public static $instance;

    public static function instance()
    {
        return new static;
    }

    public function withIsbnNumber()
    {
        $this->isbnNumber = $isbnNumber;
        return $this;
    }

    public function withCopyNumber()
    {
        $this->copyNumber = $copyNumber;
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
}
