<?php

namespace App\Controllers;

use Framework\View;
use Framework\Request;
use Framework\Session;

class TestController
{

    public function test_get( Request $request )
    {
        $view = new View;
        $session = new Session;

        $session->put('test_value',6);

        return $view->view('test.view.php', ['test'=> $session->get('test_value')]);
    }

    public function test_post( Request $request)
    {
        $view = new View;
        return $view->view('test_post.view.php', ['post'=>$request->input() ]);
    }
}