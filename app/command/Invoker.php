<?php
/**
 * Date: 29.03.2018
 * Time: 23:06
 */

namespace App\command;


/**
 * Class Invoker
 * @package App\command
 */
class Invoker
{
    /**
     * @var array
     */
    private $command = [];

    /**
     * Invoker add
     * @param CommandInterface $command
     */
    public function add(CommandInterface $command)
    {
        $this->command[] = $command;
    }


    /**
     *
     */
    public function execute()
    {

        $arraylist = [];

        foreach ($this->command as $command) {
            $arraylist[] = $command->execute();
        }

        return $arraylist;
    }

}