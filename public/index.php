<?php
require __DIR__.'/../vendor/autoload.php';

define('APP_DIR',realpath(__DIR__ . '/..'));

include './../routes.php';

$framework->init();