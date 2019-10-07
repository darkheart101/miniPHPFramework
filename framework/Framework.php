<?php

namespace Framework;


class Framework{

    protected $route;

    public function __construct(Route $route)
    {
        $this->route = $route;
    }

    public function routes()
    {
        return $this->route;
    }

    public function init()
    {
        $requested_uri = $_SERVER['REQUEST_URI'];
        foreach( $this->route->routing() as $route)
        {

            if( '/'.$route['url'] == $requested_uri)
            {
                $class = "\\App\\Controllers\\".$route['controller'];
                $controller = new $class;
                $method = $route['method'];
                $controller->$method();
                break;
            }
        }

    }
}