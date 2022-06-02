<?php

require_once './Controller/UserController.php';

class UserView{


    private $smarty;

    function __construct() {
        $this->smarty = new Smarty();
    }


    public function showLogIn($msg = ''){
        $this->smarty->assign('msg_error', $msg);
         $this->smarty->display('Templates/logIn.tpl');
    }
}