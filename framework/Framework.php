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

    protected function environment()
    {
        include('../env.php');
    }

    protected function database_setup()
    {
        // define( 'REDBEAN_MODEL_PREFIX', '' );
        define( 'REDBEAN_MODEL_PREFIX', '\\App\\Models\\' );

        if( getenv('DB_DRIVER') == 'mariadb' ){

            R::setup("mysql:host=".getenv('DB_HOST').
            ";dbname=".getenv('DB_NAME'),
           getenv('DB_USERNAME'), getenv('DB_PASSWORD') );

           return;
        }

        if( getenv('DB_DRIVER') == 'postgresql' ){
            R::setup( "pgsql:host=".getenv('DB_HOST').";dbname=".getenv('DB_NAME'),
            getenv('DB_USERNAME'), getenv('DB_PASSWORD') );

            return;
        }

        if( getenv('DB_DRIVER') == 'sqlite' ){
            R::setup( getenv('FILE') );

            return;
        }


        if( getenv('DB_DRIVER') == 'cubrid' ){
            R::setup("cubrid:host="
            .getenv('DB_HOST')
            .";port=".getenv('DB_PORT')
            .";dbname=".getenv('DB_NAME'),
            getenv('DB_USERNAME'), getenv('DB_PASSWORD') );

            return;
        }

        return;
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