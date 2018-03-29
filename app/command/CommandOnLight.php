<?php
/**
 * Date: 29.03.2018
 * Time: 23:04
 */

namespace App\command;


/**
 * Class CommandOnLight
 * @package App\command
 */
class CommandOnLight implements CommandInterface
{
    /**
     * @var Light
     */
    public $light;

    /**
     * CommandOnLight constructor.
     * @param Light $light
     */
    public function __construct(Light $light)
    {
        $this->light = $light;
    }

    /**
     * @return mixed|string
     */
    public function execute()
    {
        return $this->light->on();
    }

}