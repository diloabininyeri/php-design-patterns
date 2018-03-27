<?php
/**
 * Date: 27.03.2018
 * Time: 17:00
 */
include_once "../vendor/autoload.php";

use PHPUnit\Framework\TestCase;
use App\prototype\Product;

class PrototypeTest extends TestCase
{

    public function testIsProtoType()
    {

        $producs = new Product();

        $newclone = clone $producs;



        $this->assertInstanceOf(Product::class,$newclone);

    }
}