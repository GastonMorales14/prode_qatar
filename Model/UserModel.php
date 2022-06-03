<?php


class UserModel{

    private $db;

    function __construct(){
        $this->db= new PDO('mysql:host=localhost;'.'dbname=db_prode_qatar;charset=utf8', 'root', '');        
    }
    
    public function getUsuario($vuser){       
        $query= $this->db->prepare('SELECT * FROM usuario WHERE vusuario=?');
        $query->execute(array($vuser));
        $result = $query->fetch(PDO::FETCH_OBJ);
        return $result;
        
    }


}