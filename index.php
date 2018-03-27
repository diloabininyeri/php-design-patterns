<?php
/**
 * Created by PhpStorm.
 * User: mehmet
 * Date: 27.03.2018
 * Time: 13:09
 */


include_once "vendor/autoload.php";

/*delegate*/
use App\delegate\{
    Senior, Junior
};

$junior=new Junior();
echo (new Senior($junior))->writeCode();
/*delegate*/
