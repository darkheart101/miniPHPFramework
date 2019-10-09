<?php

namespace Framework;

class Route{
    protected $routing = array();


    public function get( $url , $controller, $method )
    {

        array_push( $this->routing,
                    array('http_method'=>'GET',
                          'url'=>$url,
                          'controller'=> $controller,
                          'method' => $method
                    )
                  );
    }

    public function post( $url , $controller, $method )
    {

        array_push( $this->routing,
                    array('http_method'=>'POST',
                          'url'=>$url,
                          'controller'=> $controller,
                          'method' => $method
                    )
                  );
    }


    public function delete( $url , $controller, $method )
    {

        array_push( $this->routing,
                    array('http_method'=>'DELETE',
                          'url'=>$url,
                          'controller'=> $controller,
                          'method' => $method
                    )
                  );
    }

    public function put( $url , $controller, $method )
    {

        array_push( $this->routing,
                    array('http_method'=>'PUT',
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