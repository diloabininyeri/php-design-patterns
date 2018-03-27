<?php
/**
 * Date: 27.03.2018
 * Time: 17:16
 */

use PHPUnit\Framework\TestCase;

use App\observe\{
    Facebook, Google, Observe
};

class ObserveTest extends TestCase
{


    public function testObserve()
    {

        $face = new Facebook();
        $google = new Google();


        $observe = new Observe();
        $observe->addServices($face);
        $observe->addServices($google);

        $observe->getMessage();

    }
}