<?php

use Framework\Framework;
use Framework\Request;
use Framework\Route;

$framework = new Framework( new Route, new Request );

$framework->routes()->get( 'testurl', 'TestController','test_get');
$framework->routes()->get( '/', 'TestController','test_get');
$framework->routes()->post( 'testurl', 'TestController','test_post');