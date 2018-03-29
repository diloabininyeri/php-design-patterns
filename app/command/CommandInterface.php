<?php
/**
 * command design pattern using execute method
 * for lose couple
 * Date: 29.03.2018
 * Time: 22:58
 */

namespace App\command;


/**
 * Interface CommandInterface
 * @package App\command
 */
interface CommandInterface
{
    /**
     * @return mixed
     */
    public function execute();
}