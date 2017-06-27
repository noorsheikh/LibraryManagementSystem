<?php

namespace Library\Domain;

final class Copy
{
    private $isbnNumber;

    private $copyNumber;

    public function __construct(CopyBuilder $builder)
    {
        $this->isbnNumber = $builder->getIsbnNumber();
        $this->copyNumber = $builder->getCopyNumber();
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
