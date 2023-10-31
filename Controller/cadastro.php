<?php
require('../vendor/autoload.php');
session_start();


if(isset($_POST['botao'])){
$nome=isset($_POST['nome']) ? $_POST['nome'] : '';
$email=isset($_POST['email']) ? $_POST['email'] : '';
$senha=isset($_POST['senha']) ? $_POST['senha'] : '';
if(!empty($_POST['nome']) && !empty($_POST['email']) &&  !empty($_POST['senha'])){
cadastro($nome,$email,$senha);
}
}




function cadastro($nome,$email,$senha){
    $usuario = new Usuario($nome,$email,$senha);
    $usuario->insertUsuario();
    header('Location:login.php');
}




?>