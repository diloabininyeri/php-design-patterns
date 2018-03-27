<?php
/**
 *
 *
 */

namespace App\delegate;


class Junior implements DelegateInterface
{
    /**
     * @return string
     */
    public function badCode()
    {

        return "bad code from junior ";
    }
}