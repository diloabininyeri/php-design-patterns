<?php
/**
 * Created by PhpStorm.
 * User: mehmet
 * Date: 27.03.2018
 * Time: 16:00
 */

namespace App\template;



class Tea extends Template implements TemplateInterface
{

    /**
     * @return string
     */
    public   function prepareWater()
    {

        return "hot ";
    }

    /**
     * @return string
     */
    public  function prepareSolid()
    {

        return "Tea";
    }
}