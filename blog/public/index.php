<?php

session_start();

require __DIR__ . "/../init.php";

$pathInfo = $_SERVER['PATH_INFO'];

$routes = [
    '/index' => [
        'controller' => 'postsController',
        'method' => 'index'
    ],
    '/post' => [
        'controller' => 'postsController',
        'method' => 'post'
    ],
    '/login' => [
        'controller' => 'loginController',
        'method' => 'login'
    ],
    '/dashboard' => [
        'controller' => 'loginController',
        'method' => 'dashboard'
    ],
    '/posts-admin' => [
        'controller' => 'postsAdminController',
        'method' => 'showPostEdit'
    ],
    '/edit-post' => [
        'controller' => 'postsAdminController',
        'method' => 'editPost'
    ],
    '/logout' => [
        'controller' => 'loginController',
        'method' => 'logout'
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