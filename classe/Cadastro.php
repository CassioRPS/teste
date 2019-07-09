<?php 
class Cadastro{
    private $usuario;
    private $senha;
    
    public function __construct(){
        
    }
    public function getUsuario(){
        return $this->usuario;
    }

    public function getSenha(){
        return $this->senha;
    }

    public function setUsuario($usuario){
        $this->usuario = $usuario;
    }

    public function setSenha($senha){
        $this->senha = $senha;
    }

    
}
?>