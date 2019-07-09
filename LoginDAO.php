<?php
require_once("Login.php");

class LoginDAO{
    
    private $con;
    
    public function __construct(){
        $this->con = new PDO("mysql:host=localhost;dbname=sge","root","");
    }
    public function buscar($login){
        $instrucao = $this->con->prepare("SELECT * FROM login WHERE usuario=:usuario AND senha=:senha");
        $instrucao->bindValue(":usuario",$login->getUsuario());
        $instrucao->bindValue(":senha",$login->getSenha());
        $res = $instrucao->execute();
        return  $res;
    }
}