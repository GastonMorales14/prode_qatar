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

    public function connection(){
       
        if((!empty($_POST['email']))&&(!empty($_POST['password']))){
            $email= $_POST['email'];
            $password= $_POST['password'];     
            if(isset($email) && isset($password)){
               //ir al modelo y obtener los datos del usua
               $BDusuario = [];
                if(isset($BDusuario) && $BDusuario){               
                    if(password_verify($password, $BDusuario->vpassword)){
                        if($esUsuarioComun){
                            session_start();
                            $_SESSION['common_user']= $BDusuario->vnombre;
                            //go home               
                        }
                        elseif($esAdministrador){
                            session_start();
                            $_SESSION['admin_user']= $BDusuario->vnombre;
                            //go home           
                        }
                    }else{
                        $this->view->showLogIn('Contraseña Incorrecta');                     
                    }
                }
            }   
        }else{
            $this->view->showLogIn('Ingrese los datos obligatorios');      
        }


    }

    
}