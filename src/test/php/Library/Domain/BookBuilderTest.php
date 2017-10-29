<?php

namespace Library\Domain;

use Silex\WebTestCase;

class BookBuilderTest extends WebTestCase
{
    const BASE_DIR = __DIR__;
    const TITLE = 'title';
    const AUTHOR = 'author';
    const ISBN_NUMBER = '123456';
    const COVER = 'cover image';
    const YEAR = 20187;
    const DESCRIPTION = "This is a sample description.";

    public function createApplication()
    {
        return require self::BASE_DIR . "/../../../../../app/app.php";
    }

    /**
     * @test
     * @expectedException \Exception
     */
    public function throwExceptionIfTitleIsEmpty()
    {
        BookBuilder::instance()
            ->withTitle(null)
            ->withAuthor(self::AUTHOR)
            ->withIsbnNumber(self::ISBN_NUMBER)
            ->withCover(self::COVER)
            ->withYear(self::YEAR)
            ->withDescription(self::DESCRIPTION)
            ->build();
    }

    /**
     * @test
     * @expectedException \Exception
     */
    public function throwExceptionIfIsbnNumberIsEmpty()
    {
        BookBuilder::instance()
            ->withTitle(self::TITLE)
            ->withAuthor(self::AUTHOR)
            ->withIsbnNumber(null)
            ->withCover(self::COVER)
            ->withYear(self::YEAR)
            ->withDescription(self::DESCRIPTION)
            ->build();
    }
}
