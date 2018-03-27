<?php
/**
 * Date: 27.03.2018
 * Time: 17:07
 */
namespace App\observe;


/**
 * Class Observe
 * @package App\Observe
 */
/**
 * Class Observe
 * @package App\observe
 */
class Observe
{
    /**
     * @var
     */
    private $servicesList;

    /**
     * observe constructor.
     * @param ServiceInterface $service
     */


    public function addServices(ServiceInterface $service)
    {
        $this->servicesList[]=$service;
    }


    /**
     *call all service mesage methods
     * faceboook google
     */
    public function getMessage()
    {


        foreach($this->servicesList as $item)
        {

            echo $item->message();
        }

    }
}