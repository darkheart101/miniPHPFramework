<?php

namespace Framework;

class Route{
    protected $routing = array();

    public function __construct()
    {

    }

    public function get( $url , $controller, $method )
    {
        array_push(
                    $this->routing, array(
                                    'url'=>$url,
                                    'controller'=> $controller,
                                    'method' => $method
                    )
                  );
    }

    public function routing()
    {
        return $this->routing;
    }
}