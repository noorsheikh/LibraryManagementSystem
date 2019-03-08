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

    public function withIsbnNumber(string $isbnNumber): CopyBuilder
    {
        $this->isbnNumber = $isbnNumber;
        return $this;
    }

    public function withCopyNumber(int $copyNumber): CopyBuilder
    {
        $this->copyNumber = $copyNumber;
        return $this;
    }

    public function withBookId(int $bookId): CopyBuilder
    {
        $this->bookId = $bookId;
        return $this;
    }

    public function build(): Copy
    {
        return new Copy($this);
    }

    public function getIsbnNumber(): string
    {
        return $this->isbnNumber;
    }

    public function getCopyNumber(): int
    {
        return $this->copyNumber;
    }

    public function getBookId(): int
    {
        return $this->bookId;
    }
}
