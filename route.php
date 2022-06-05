<?php
require_once './libs/smarty/RouterClass.php';
require_once './Controller/UserController.php';
require_once './Controller/SeleccionesController.php';

// CONST FOR ROUTE
define("BASE_URL", 'http://'.$_SERVER["SERVER_NAME"].':'.$_SERVER["SERVER_PORT"].dirname($_SERVER["PHP_SELF"]).'/');
define("LOGOUT", 'http://'.$_SERVER["SERVER_NAME"].':'.$_SERVER["SERVER_PORT"].dirname($_SERVER["PHP_SELF"]).'/logout');

$r = new Router();


//Routes




$r->addRoute('home', 'GET', 'SeleccionesController', 'showHome');
$r->addRoute('registrar', 'GET', 'UserController', 'registry');
$r->addRoute('logOut', 'GET', 'UserController', 'logOut');

$r->addRoute('creationUser', 'POST', 'UserController', 'creationUser');

//Conection Route
$r->addRoute('connect', 'POST', 'UserController', 'connection');
//DefaultRoute
$r->setDefaultRoute("UserController", "logIn");


//run
$r->route($_GET['action'], $_SERVER['REQUEST_METHOD']); 
