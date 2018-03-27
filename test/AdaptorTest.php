<?php
/**
 * Date: 27.03.2018
 * Time: 17:50
 */
include_once "../vendor/autoload.php";

use PHPUnit\Framework\TestCase;

use App\adaptor\{
    Book,Adaptor
};

class AdaptorTest extends TestCase
{

    public function testAdaptor()
    {

        $book=new Book();

        $adaptor=new Adaptor($book); //depency enjection

        $year=$adaptor->getNobelYear();

        $this->assertEquals($year,2006);
    }

}