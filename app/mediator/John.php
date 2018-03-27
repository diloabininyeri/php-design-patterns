<?php
/**
 * Date: 27.03.2018
 * Time: 19:53
 */
namespace  App\mediator;

/**
 * Class John
 * @package App\mediator
 */
class John
{
    /**
     * @var
     */
    private $mediator;

    /**
     * John constructor.
     * @param $mediator
     */
    public function __construct($mediator)
    {

        $this->mediator=$mediator;
    }


    /**
     * @return string
     */
    public function message()
    {
        return "ı am john";
    }

}