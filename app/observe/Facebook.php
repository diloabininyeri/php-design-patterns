<?php
/**
 * Date: 27.03.2018
 * Time: 17:13
 */
namespace App\observe;

use App\observe\ServiceInterface;

/**
 * Class Facebook
 * @package App\observe
 */
class Facebook implements ServiceInterface
{
    /**
     * @return string
     */
    public function message()
    {

        return "message get from facebook";
    }
}