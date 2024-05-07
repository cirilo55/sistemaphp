<?php
use Sys\Router;

$router = new Router();

$router->addRoute('GET', '/', function () {

});

include './routes/userRouter.php';


$router->handleRequest();
