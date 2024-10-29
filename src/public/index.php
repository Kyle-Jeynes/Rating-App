<?php

use AltoRouter as Router;

session_start();

include_once __DIR__ . '/../vendor/autoload.php';
include_once __DIR__ . '/../app/Http/routes.php';

if(($match = app(Router::class)->match()) === false) {
    return view('404');
}

[$controller, $method] = $match['target'];

if (!method_exists(($instance = app($controller)), $method)) {
    throw new Exception(sprintf('Method %s does not exist on %s', $method, $controller));
}

call_user_func_array($instance->{$method}(...), $match['params']);
exit();