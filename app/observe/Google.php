<?php
/**

 * Date: 27.03.2018
 * Time: 17:12
 */

namespace App\observe;

use App\observe\ServiceInterface;

/**
 * Class Google
 * @package App\observe
 */
class Google implements ServiceInterface
{

    /**
     * @return string
     */
    public function message()
    {

        return "message get from google";
    }
}