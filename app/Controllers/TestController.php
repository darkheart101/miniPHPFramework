<?php

namespace App\Controllers;

use Framework\View;

class TestController
{
    public function test()
    {
        $view = new View;
        return $view->view('test.view.php', ['test'=> 'test']);
    }
}