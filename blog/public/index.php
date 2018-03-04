<?php
require __DIR__ . "/../init.php";

$pathInfo = $_SERVER['PATH_INFO'];
var_dump($pathInfo);

$routes = [
    '/index' => [
        'controller' => 'postsController',
        'method' => 'index'
    ],
    '/post' => [
        'controller' => 'postsController',
        'method' => 'post'
    ]
];

if (isset($routes[$pathInfo]))
{
    $route = $routes[$pathInfo];
    $controller = $container->make($route['controller']);
    $method = $route['method'];
    $controller->$method();

}

?>