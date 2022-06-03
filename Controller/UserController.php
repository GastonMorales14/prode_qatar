<?php
//TODO
//USER MODEL
require_once './View/UserView.php';
require_once './Model/UserModel.php';

class UserController{

    private $view;
    private $model;

    function __construct(){
        $this->view= new UserView(); 
        $this->model = new UserModel();
    }   


    public function logIn(){      
        $this->view->showLogIn();        
    }

    public function connection(){
       
        if((!empty($_POST['email']))&&(!empty($_POST['password']))){
            $vuser= $_POST['email'];
            $password= $_POST['password'];   
             
            if(isset($vuser) && isset($password)){               
               $BDuser = $this->model->getUsuario($vuser);
                if(isset($BDuser) && $BDuser){               
                    if(password_verify($password, $BDuser->vpassword)){
                        //Administrador
                        if($BDuser->fk_nacceso == 1){
                            session_start();
                            $_SESSION['admin']= $BDuser->vnombre . ' '.$BDuser->vapellido;
                            $this->view->homeLocation();                    
                        }
                        //Usuario
                        elseif($BDuser->fk_nacceso == 2){
                            session_start();
                            $_SESSION['common_user']= $BDuser->vnombre . ' '.$BDuser->vapellido;
                            $this->view->homeLocation();                
                        }
                        
                       
                    }else{
                        $this->view->showLogIn('Contraseña Incorrecta');                     
                    }
                }else{
                    $this->view->showLogIn('Usuario Inexistente');      
                }
            }   
        }else{
            $this->view->showLogIn('Ingrese los datos obligatorios');      
        }
    }

    
}