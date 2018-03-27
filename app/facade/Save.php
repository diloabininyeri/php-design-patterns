<?php
/**
 * Date: 27.03.2018
 * Time: 14:02
 */

namespace App\facade;


class Save
{

    /**
     * @param $member
     * @return bool
     */
    public function saveMemberToDatabase($member)
    {

        /*do sometthing save member to database */
        return $this->SaveMember($member);

    }


    private function SaveMember($member)
    {

        if($member=="blabla")
            return true;

    }

}