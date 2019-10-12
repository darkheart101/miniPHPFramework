<?php

namespace Framework;

class Session{


    protected $started = false;


    public function __construct()
    {
        $this->start();
    }

    /**
     * Start the session
     * @return Session
     */
    public function start()
    {
        if(!$this->started){
            session_start();
            $this->started = true;
        }
        return $this;
    }

    public function put( $key, $value)
    {
        $_SESSION[$key] = $value;
    }

    public function get( $key )
    {
        return $_SESSION[$key];
    }

    public function abort()
    {
        return session_abort();
    }

    public function destroy()
    {
        return session_destroy();
    }

    public function reset()
    {
        return session_reset();
    }

    public function unset()
    {
        return session_unset();
    }

    public function session_id()
    {
        return session_id();
    }


}