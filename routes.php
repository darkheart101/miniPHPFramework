<?php

use Framework\Framework;
use Framework\Request;
use Framework\Route;

$framework = new Framework( new Route, new Request );

$framework->routes()->get( '/', 'HomeController','index');