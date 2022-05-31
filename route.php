<?php
    require_once './libs/smarty/RouterClass.php';
    require_once './Controller/UserController.php';

    // CONST FOR ROUTE
    define("BASE_URL", 'http://'.$_SERVER["SERVER_NAME"].':'.$_SERVER["SERVER_PORT"].dirname($_SERVER["PHP_SELF"]).'/');
    define("LOGOUT", 'http://'.$_SERVER["SERVER_NAME"].':'.$_SERVER["SERVER_PORT"].dirname($_SERVER["PHP_SELF"]).'/logout');

    $r = new Router();

    //TODO
    //Redirect to Log In




     //DefaultRoute
     $r->setDefaultRoute("UserController", "logIn");

     //run
     $r->route($_GET['action'], $_SERVER['REQUEST_METHOD']); 
