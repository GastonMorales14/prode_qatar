<?php

require_once './Controller/UserController.php';

class UserView{


    private $smarty;

    function __construct() {
        $this->smarty = new Smarty();
    }


    public function showLogIn($msg = ''){
        $this->smarty->assign('msg_error', $msg);
        $this->smarty->display('Templates/cuenta/logIn.tpl');
    }

    public function showRegistry($msg = ''){
        $this->smarty->assign('msg_error', $msg);
        $this->smarty->display('Templates/cuenta/register.tpl');
    }

    //para evitar error en php_session generamos un location default

    function homeLocation(){       
        header("Location: ".BASE_URL."home");
    }
    function loginLocation(){ 
        header("Location: ".BASE_URL."login");
    }
}