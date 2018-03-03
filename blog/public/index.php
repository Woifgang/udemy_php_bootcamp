<?php
require __DIR__ . "/../init.php";

$pathInfo = $_SERVER['PATH_INFO'];
var_dump($pathInfo);

if ($pathInfo == "/index") {
    $postsController = $container->make("postsController");
    $postsController->index();
} elseif ($pathInfo == "/post") {
    $postController = $container->make("postsController");
    $postController->post();
}

?>