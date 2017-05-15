<?php

namespace Marv\Session;

/**
 * Handle sessions.
 */

class Session
{
    private $name;

    /**
    * Constructor
    * @param string $name (optional) The name of the Session
    * @return void
    */
    public function __construct($name = "MYSESSION")
    {
        $this->name = $name;
    }


    /**
    * Starts the session if it do not exist
    * @return void
    */
    public function start()
    {
        session_name($this->name);

        if (!empty(session_id())) {
            session_destroy();
        }
        session_start();
    }


    /**
    * Check if key exists in the Session
    * @param $key string The key to check for in the Session
    * @return bool true if $key exists, otherwise false
    */
    public function has($key)
    {
        return array_key_exists($key, $_SESSION);
    }


    /**
    * Sets a variable in the Session
    * @param $key string The key in Session
    * @param $val string The value to set to $key
    * @return void
    */
    public function set($key, $val)
    {
        $_SESSION[$key] = $val;
    }


    /**
    * Retreive value if exists in Session
    * @param $key string The key to get from Session
    * @param $default optional The return value if not found
    * @return string The session variable if present, else $default
    */

    public function get($key, $default = false)
    {
        return (self::has($key)) ? $_SESSION[$key] : $default;
    }


    public function increment($key)
    {
        $_SESSION[$key] += 1;
    }

    public function decrement($key)
    {
        $_SESSION[$key] -= 1;
    }


    /**
    * Destroy the session
    * @return void
    */
    public function destroy()
    {
        session_destroy();
    }

    /**
    * Deletes a specific varable from session if it exists
    * @param $key string The key variable ot unset from Session
    * @return void
    */
    public function delete($key)
    {
        if (self::has($key)) {
            unset($_SESSION[$key]);
        }
    }

    /**
    * Dumps the Session
    * Good for debugging
    * @return void
    */
    public function dump()
    {
        var_dump($_SESSION);
    }
}
