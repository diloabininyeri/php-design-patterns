<?php
/**

 * Date: 27.03.2018
 * Time: 21:55
 */

namespace App\abtractfactory;


/**
 * Class JsonFactory
 * @package App\abtractfactory
 */
class JsonFactory
{
    /**
     * @param $data
     * @return JsonData
     */
    public function createJson($data)
    {

        return new  JsonData($data);
    }
}