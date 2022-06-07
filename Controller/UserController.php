<?php

require_once "./Helpers/AuthHelper.php";
require_once './View/UserView.php';
require_once './Model/UserModel.php';

class UserController{

    private $view;
    private $model;
    private $authHelper;

    function __construct(){
        $this->view= new UserView(); 
        $this->model = new UserModel();
        $this->authHelper = new AuthHelper();
    }   


    public function logIn(){  
        $logueado = $this->authHelper->checkLoggedIn();
       
        $logueado == false ?  $this->view->showLogIn() :  $this->view->homeLocation();  
          
    }

    public function connection(){
        $logueado = $this->authHelper->checkLoggedIn();
       
        $logueado == false ?  $this->view->showLogIn() :  $this->view->homeLocation(); 
        
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
                            $_SESSION['usuario']=$BDuser->vusuario;
                            $_SESSION['nombre']=$BDuser->vnombre . ' '.$BDuser->vapellido;
                            $this->view->homeLocation();                    
                        }
                        //Usuario
                        elseif($BDuser->fk_nacceso == 2){
                            session_start();
                            $_SESSION['common_user']= $BDuser->vnombre . ' '.$BDuser->vapellido;
                            $_SESSION['usuario']=$BDuser->vusuario;
                            $_SESSION['nombre']=$BDuser->vnombre . ' '.$BDuser->vapellido;
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

    public function creationUser(){
        
        if((empty($_POST['name']))){
            $this->view->showRegistry("Debe Ingresar Nombre"); 
            return;
        }
        if((empty($_POST['surname']))){
            $this->view->showRegistry("Debe Ingresar un Apellido"); 
            return;
        }
        if((empty($_POST['email']))){
            $this->view->showRegistry("Debe Ingresar un Email valido"); 
            return;
        }
        if((empty($_POST['password'])) || strlen($_POST['password']) < 6){
            $this->view->showRegistry("Debe Ingresar Contraseña mayor a 6 caracteres"); 
            return;
        }

        
      
        $name= $_POST['name'];
        $surname= $_POST['surname'];
        $vuser= $_POST['email'];
        $password= $_POST['password'];

     
        $date = date_create();
        $date = date_format($date, 'Y-m-d H:i:s');
       
        

        $BDuser= $this->model->getUsuario($vuser); 
      
        if($BDuser == false){    
            
            $passwordHash = password_hash($password, PASSWORD_DEFAULT);

            $this->model->loadUser($name, $surname, $vuser, $passwordHash, 2, $date);

            $user = $this->model->getUsuario($vuser);

            session_start();
            $_SESSION['common_user']= $user->vnombre . ' '.$user->vapellido;
            $_SESSION['usuario']=$BDuser->vusuario;
            $_SESSION['nombre']=$BDuser->vnombre . ' '.$BDuser->vapellido;

            $this->view->homeLocation();  

        }else if($BDuser == true){
            $this->view->showRegistry("El usuario: ". $vuser. " se encuentra registrado");
        }
    
        

    }






    public function registry(){
        $logueado = $this->authHelper->checkLoggedIn();
       
        $logueado == false ?  $this->view->showRegistry() :  $this->view->homeLocation();  

        $this->view->showRegistry();  

    }

    function logOut()  {
        session_start();
        session_destroy();
        $this->view->loginLocation();
      }

    
}