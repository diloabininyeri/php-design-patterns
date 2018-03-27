<?php
/**
 * Date: 27.03.2018
 * Time: 13:30
 */
use PHPUnit\Framework\TestCase;

use App\delegate\{
 Senior,Junior
};

class DelegateTest extends TestCase
{


    /**
     *testt method for delegate
     */
    public  function testDelegate()
    {

        $junior=new Junior();
        $juniorCode=$junior->badCode();
        $seniorCode=(new Senior($junior))->writeCode();
        $this->assertEquals($juniorCode,$seniorCode);
    }
}