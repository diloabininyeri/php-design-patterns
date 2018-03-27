<?php
/**
 * Date: 27.03.2018
 * Time: 17:46
 */

namespace App\adaptor;

use App\adaptor\Book;


/**
 * Class Adaptor
 * @package App\adaptor
 */
class Adaptor
{
    /**
     * @var \App\adaptor\Book
     */
    private $book;

    /**
     * Adaptor constructor.
     * @param \App\adaptor\Book $book
     */
    public function __construct(Book $book)
    {

        $this->book = $book;
    }


    /**
     * @return int
     */
    function getNobelYear()
    {

        if($this->book->getAuthor()=="orhan pamuk" && $this->book->getTitle()=="kar")
            return 2006;
    }


}