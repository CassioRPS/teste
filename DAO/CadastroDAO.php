<?php
require_once("../classe/Cadastro.php");

class CadastroDAO{
    
    private $con;
    public function __construct(){
        $this->con = new PDO("mysql:host=localhost;dbname=sge","cassio","cassio2411");
    }
    
    public function salvar($cadastro){
        $instrucao = $this->con->prepare("INSERT INTO login (usuario, senha) VALUES (:usuario, :senha);");
        $instrucao->bindValue(":usuario",$cadastro->getUsuario());
        $instrucao->bindValue(":senha",$cadastro->getSenha());
        $res = $instrucao->execute();
        return  $res;
    }
    
  
}
 ?>