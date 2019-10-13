<?php

namespace App\Controllers;

use Framework\View;
use Framework\Request;
use Framework\Session;
use \RedBeanPHP\R as R;

class HomeController
{

    public function index( Request $request )
    {
        $view = new View;

        return $view->view('home.view.php');
    }
}
