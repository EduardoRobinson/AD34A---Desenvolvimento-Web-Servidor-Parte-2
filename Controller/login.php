<?php 
require('../vendor/autoload.php');
session_start();


if(isset($_POST['botao'])){
    $email=isset($_POST['email']) ? $_POST['email'] : '';
    $senha=isset($_POST['senha']) ? $_POST['senha'] : '';
    if(!empty($_POST['senha']) && !empty($_POST['email'])){
    login($email,$senha);
    }
    }




function login($email,$senha){
    $sucesso=0;
    $user= new Usuario();
    $sucesso=$user->login($email,$senha);
    if($sucesso==0){
        print_r("Usuario ou senha incorreta");
    }else{
        header('Location:../View/registro.php');
    }
}




?>