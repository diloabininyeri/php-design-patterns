<?php
/**
 * Date: 30.03.2018
 * Time: 00:25
 */

require_once realpath(__DIR__ . "../../vendor/autoload.php");

(function () {

    echo $this->table;

})->call(new Bind\call\Users);


