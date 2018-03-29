<?php
/**
 * light off eventi invoker
 * Date: 29.03.2018
 * Time: 23:00
 */

namespace App\command;

use App\command\Light;


/**
 * Class CommandOffLight
 * @package App\command
 */
class CommandOffLight implements CommandInterface
{
    /**
     * @var \App\command\Light
     */
    public $light;

    /**
     * CommandOffLight constructor.
     * @param \App\command\Light $light
     */
    public function __construct(Light $light)
    {
        $this->light=$light;
    }

    /**
     * @return mixed|string
     */
    public function execute()
    {

        return $this->light->off();
    }
}