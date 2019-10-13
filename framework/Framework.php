<?php

namespace Framework;

use \RedBeanPHP\R as R;

class Framework{

    protected $route;
    protected $request;

    public function __construct(Route $route, Request $request)
    {
        $this->route = $route;
        $this->request = $request;
    }

    public function routes()
    {
        return $this->route;
    }

    public function environment()
    {
        include('../env.php');
    }

    public function database_setup()
    {
        R::setup("mysql:host=".getenv('DB_HOST').
                 ";dbname=".getenv('DB_NAME'),
                'root', 'secret' );
    }

    public function init()
    {
        $this->environment();

        $this->database_setup();

        foreach( $this->route->routing() as $route)
        {
            if( $this->request->method() == $route['http_method'])
            {
                if($route['url'] == '/') $route['url'] = ''; // ugly fix

                if( '/'.$route['url'] == $this->request->request_uri())
                {
                    $class = "\\App\\Controllers\\".$route['controller'];
                    $controller = new $class;
                    $method = $route['method'];
                    $controller->$method($this->request);
                }

            }
        }
    }


}