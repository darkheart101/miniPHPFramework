<?php

namespace App\Controllers;

use Framework\View;
use Framework\Request;
use Framework\Session;
use \RedBeanPHP\R as R;
// use App\Models\Book;

class TestController
{

    public function test_get( Request $request )
    {
        $view = new View;
        $session = new Session;

        $bean = R::dispense('user');

        $user = $bean->box();


        $user->firstname = "John";
        $user->lastname = "Doe";

        $userid = R::store($user);


        $session->put('test_value',$userid);

        return $view->view('test.view.php', ['test'=> $session->get('test_value')]);
    }

    public function test_post( Request $request)
    {
        $view = new View;
        return $view->view('test_post.view.php', ['post'=>$request->input() ]);
    }
}
