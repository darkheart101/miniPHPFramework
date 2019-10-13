<?php

namespace App\Controllers;

use Framework\View;
use Framework\Request;
use Framework\Session;
use \RedBeanPHP\R as R;

class TestController
{

    public function test_get( Request $request )
    {
        $view = new View;
        $session = new Session;



        $book = R::dispense( 'book' );
        $book->title = 'Learn to Program';
        $book->rating = 10;

        $id = R::store( $book );

        $session->put('test_value',$id);

        return $view->view('test.view.php', ['test'=> $session->get('test_value')]);
    }

    public function test_post( Request $request)
    {
        $view = new View;
        return $view->view('test_post.view.php', ['post'=>$request->input() ]);
    }
}