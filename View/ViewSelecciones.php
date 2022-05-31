<?php
require_once 'Libs/smarty/Smarty.class.php';

class ViewSelecciones {

    private $smarty;

    function __construct() {
        $this->smarty = new Smarty();
    }

    function showHome() {
        $this->smarty->display('Templates/home.tpl');
    }
}