<?php

require_once './Controller/UserController.php';

class UserView{


    private $smarty;

    function __construct() {
        $this->smarty = new Smarty();
    }


    public function showLogIn(){
         $this->smarty->display('Templates/logIn.tpl');
    }
}