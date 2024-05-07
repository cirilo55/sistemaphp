<?php

$router->addRoute('GET', '/users', function () {
   
});
$router->addRoute('GET', '/login', function () {
    global $router;
    $router->setTitle('Login');
    include("app/view/pages/login/index.php");
});
$router->addRoute('GET', '/home', function () {
    global $router;
    $router->setTitle('Home Page');
    include("app/view/pages/home/index.php");
});

$router->addRoute('GET', '/SignOut', function () {
    session_destroy();
    header("Location: /login");

});