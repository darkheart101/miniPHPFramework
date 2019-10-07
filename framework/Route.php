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
                                    'http_method'=>'GET',
                                    'url'=>$url,
                                    'controller'=> $controller,
                                    'method' => $method
                    )
                  );
    }

    public function post( $url , $controller, $method )
    {

        array_push(
                    $this->routing, array(
                                    'http_method'=>'POST',
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