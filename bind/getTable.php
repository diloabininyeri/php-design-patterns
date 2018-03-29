<?php
/**
 * in php modern php framework acces protected variable
 * this example for php framework
 * also u can reflection class
 * Date: 30.03.2018
 * Time: 00:25
 */

require_once realpath(__DIR__ . "../../vendor/autoload.php");

echo (function () {

    return  $this->table;

})->call(new Bind\call\Users);


