<?php

 class AuthHelper{

    function __construct(){
    }



    //si esta seteada la sesion con el email retorna verdadero y sino falso para chequear si el usuario esta logueado
    function checkLoggedIn(){
        session_start();
        if(isset($_SESSION['usuario'])){  
            return true;
        } else {
           return false;
        }
    }

    //trae el nombre del usuario logueado
    function checkAdimn() {
        if(isset($_SESSION['admin'])) {
            return true;
        }
        else {
            return false;
        }
    }

    //trae el email del usuario loggeado
    function getEmail(){
        if(isset($_SESSION['email'])) {
            $email = $_SESSION['email'];
            return $email;
        }
    }

}
