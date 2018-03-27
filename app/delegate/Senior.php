<?php

namespace App\delegate;


class Senior
{
    private $junior;

    /**
     * Senior constructor.
     * @param Junior $junior
     */
    public function __construct(Junior $junior)
    {

        $this->junior=$junior;
    }

    /**
     * @return string
     */
    public function writeCode()
    {

        return $this->junior->badCode();
    }
}