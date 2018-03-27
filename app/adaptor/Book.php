<?php
/**
 * Date: 27.03.2018
 * Time: 17:44
 */

namespace App\adaptor;


/**
 * Class Book
 * @package App\adaptor
 */
class Book
{

    /**
     * @return string
     */
    public function getAuthor(){
        return "orhan pamuk";
    }

    /**
     * @return string
     */
    public function getTitle()
    {
        return "kar";
    }
}