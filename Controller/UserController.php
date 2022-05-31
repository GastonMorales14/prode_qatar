<?php
//TODO
//USER MODEL
require_once './View/UserView.php';


class UserController{

    private $view;


    function __construct(){
        $this->view= new UserView(); 
    }   


    public function logIn(){
      
        $this->view->showLogIn();
        
    }

    
}