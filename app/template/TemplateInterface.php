<?php

namespace App\template;

/**
 * @author <dılo sürücü>
 * @package
 * Interface TemplateInterface
 * @package App\template
 */
interface TemplateInterface
{

    /**
     * @return mixed
     */
    function prepareWater();

    /**
     * @return mixed
     */
    function prepareSolid();
}