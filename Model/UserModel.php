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

    public function loadUser($name, $surname, $vuser, $password, $access, $date){
        $query = $this->db->prepare('INSERT INTO usuario (vnombre, vapellido, vusuario, vpassword, fk_nacceso, tscreado) VALUES (?, ?, ?, ?, ?,?)');
        $query->execute(array($name, $surname, $vuser, $password, $access, $date));
    }


}   