<?php
/**
 * Date: 27.03.2018
 * Time: 18:00
 */
namespace App\iterator;

class MyIterator implements \Iterator {
    /**
     * @var int
     */
    private $position = 0;
    /**
     * @var array
     */
    private $array = array(
        "firstelement",
        "secondelement",
        "lastelement",
    );

    /**
     * MyIterator constructor.
     */
    public function __construct() {
        $this->position = 0;
    }

    /**
     *
     */
    public function rewind() {
        var_dump(__METHOD__);
        $this->position = 0;
    }

    /**
     * @return mixed
     */
    public function current() {
        var_dump(__METHOD__);
        return $this->array[$this->position];
    }

    /**
     * @return int|mixed
     */
    public function key() {
        var_dump(__METHOD__);
        return $this->position;
    }

    /**
     *
     */
    public function next() {
        var_dump(__METHOD__);
        ++$this->position;
    }

    /**
     * @return bool
     */
    public function valid() {
        var_dump(__METHOD__);
        return isset($this->array[$this->position]);
    }
}
