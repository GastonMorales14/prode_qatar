<?php
require_once 'Libs/smarty/Smarty.class.php';

class ViewSelecciones {

    private $smarty;

    function __construct() {
        $this->smarty = new Smarty();
    }

    function showHome($logueado = "", $admin = "", $name = "") {
        $this->smarty->assign('logueado', $logueado);
        $this->smarty->assign('admin', $admin);
        $this->smarty->assign('name', $name);
        $this->smarty->display('Templates/home.tpl');
    }
}