<?php

namespace App\Controllers;

use Framework\View;

class TestController
{
    public function test_get()
    {
        $view = new View;
        return $view->view('test.view.php', ['test'=> 'test']);
    }

    public function test_post()
    {
        $view = new View;
        return $view->view('test_post.view.php', ['post'=> $_POST]);
    }
}