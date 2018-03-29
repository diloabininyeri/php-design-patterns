<?php
/**
 * Date: 30.03.2018
 * Time: 00:26
 */
spl_autoload_register(function ($class) {
    include_once "call/$class.php";
});