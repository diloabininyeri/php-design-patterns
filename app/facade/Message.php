<?php
/*
 *
 * get messae from save class
 */
namespace App\facade;


class Message
{
    /**
     * @param $save
     * @return string
     */
    public function getMessage($save)
    {

        return $save==true ? "succesful":"unsuccesful";
    }
}