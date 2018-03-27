<?php

include_once "../vendor/autoload.php";

use PHPUnit\Framework\TestCase;
use App\singletion\Session;

class SingletionTest extends TestCase
{


    public function testSingletion()
    {

        $ad=Session::set("ad","dılo");

        $soyad=Session::set("soyad","sürücü");

        Session::delete("soyad");

        $this->assertEquals("dılo",Session::get("ad"));

        $this->assertEmpty(Session::get("soyad"));
    }
}