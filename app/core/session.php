<?php
namespace MVC\core;

class session{
    public static function starting()
    {
        @session_start();
    }

    public static function set_session($key , $value)
    {
        $_SESSION[$key] = $value;
    }
    
    public static function get_session($key)
    {
        if (isset($_SESSION[$key]))
        return $_SESSION[$key];
    }

    public static function destroying()
    {
        session_destroy();
    }

}
?>