<?php
require_once ("../classe/Cadastro.php");
require_once ("../DAO/CadastroDAO.php");

$usuario = $_POST["usuario"];
$senha = $_POST["senha"];

$cadastro = new Cadastro();
$cadastro->setUsuario($usuario);
$cadastro->setSenha($senha);
$cadastroDAO = new CadastroDAO();
$res = $cadastroDAO->salvar($cadastro);

if($res){
    echo "<script type='text/javascript'>
                window.alert('Sucesso');
                window.location.href='http://localhost/login/Login.html';
              </script>";
}


?>