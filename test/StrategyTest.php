<?php
/**

 * Date: 27.03.2018
 * Time: 16:30
 */
use PHPUnit\Framework\TestCase;
use App\strategy\Strategyclass;


class StrategyTest extends TestCase
{

    public function testStrategy()
    {

        $strayegyConstrct = new Strategyclass("Oracle");
        $result = $strayegyConstrct->update([4, 5]);

        $this->assertEquals("oracle", $result);


        $stragy = new Strategyclass("Mysql");
        $mysqlresult = $stragy->update([45, 89]);

        $this->assertEquals("mysql", $mysqlresult);
    }
}