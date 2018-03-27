<?php
/**
*/

namespace App\facade;


class Member
{

    /**assume control is exist member from database
     * @param $member
     * @return bool
     */
    public function isExistMember($member){

        if($member)
            return true;

    }

}