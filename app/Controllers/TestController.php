<?php

namespace App\Controllers;

use Framework\View;
use Framework\Request;

class TestController
{

    public function test_get( Request $request )
    {
        $view = new View;
        return $view->view('test.view.php', ['test'=> 'test']);
    }

    public function test_post( Request $request)
    {
        $view = new View;
        return $view->view('test_post.view.php', ['post'=>$request->input() ]);
    }
}