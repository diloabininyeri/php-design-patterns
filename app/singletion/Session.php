<?php
/**
 * static session class example singletion for session_start()
 * session_start() anyway and anytime just run once time
 */



namespace App\singletion;

class Session
{
    private static $sessionStart = false;

    /**
     *singletion method
     * session_start() just once run
     * and can call from all methods
     */
    private static function start()
    {
        if (self::$sessionStart == false) {
            session_start();
            self::$sessionStart = true;
        }

    }

    /**
     * session get method
     * @param $key
     * @return mixed
     */
    public static function get($key)
    {
        self::start();
        if(isset($_SESSION[$key]))
            return $_SESSION[$key];

    }


    /**session set method
     * @param $key
     * @param $val
     * @return mixed
     */
    public static function set($key, $val)
    {
        self::start();
        return $_SESSION[$key]=$val;
    }

    /**delete session
     * @param $key
     */
    public static function delete($key)
    {
        self::start();
        if(isset($_SESSION[$key]))
              unset($_SESSION[$key]);
    }
    /**
     *remove all session
     */
    public static function flush()
    {
        self::start();
        session_unset();
        session_destroy();
    }

}