<?php
require_once "./View/ViewSelecciones.php";
require_once "./Helpers/AuthHelper.php";

class SeleccionesController {

    private $model;
    private $view;
    private $authHelper;

    function __construct() {
       // $this->model = new SeleccionesModel();
        $this->view = new ViewSelecciones();
       // $this->authHelper = new AuthHelper();
    }

    function showHome() {
        /*$logueado = $this->authHelper->checkLoggedIn();
        if ($logueado) {
            $this->view->showHome();
        }
        else {*/
            $this->view->showHome();
        //}
    }





}