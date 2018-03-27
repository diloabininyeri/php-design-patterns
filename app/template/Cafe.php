<?php
/**

 * Date: 27.03.2018
 * Time: 16:04
 */

namespace App\template;


class Cafe implements TemplateInterface
{

    /**
     * @return string
     */
    public   function prepareWater()
    {

        return "hot";
    }

    /**
     * @return string
     */
    public  function prepareSolid()
    {

        return " Caffe";
    }
}