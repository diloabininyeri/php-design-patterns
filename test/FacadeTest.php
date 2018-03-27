<?php
/*
 * Date: 27.03.2018
 * Time: 13:52
 */

use PHPUnit\Framework\TestCase;
use App\facade\{
    Member, Message, Save
};


class FacadeTest extends TestCase
{

    public function testRunExecFacadePattern()
    {

        $member = "flafla";
        $member = (new Member())->isExistMember($member);
        $save = (new Save())->saveMemberToDatabase($member);
        $message = (new Message())->getMessage($save);

        $this->assertEquals($message, "succesful");

    }
}