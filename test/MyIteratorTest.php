<?php
/**
 * Date: 27.03.2018
 * Time: 18:01
 */


use PHPUnit\Framework\TestCase;

use App\iterator\MyIterator;

class MyIteratorTest extends TestCase
{

    public function testIterator()
    {

        $it = new myIterator;

        foreach($it as $key => $value) {
            var_dump($key, $value);
            echo "\n";
        }
    }

}