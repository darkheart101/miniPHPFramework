<?php

use Framework\Framework;

$framework = new Framework;

$framework->routes()->get('testurl', 'TestController','test');