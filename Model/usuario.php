<?php
require('../DataBase/conexao.php');
Class Usuario{
    public $nome;
    public $email;
    public $senha;

    public function __construct($nome=null,$email=null,$senha=null){

        $this->nome=$nome;
        $this->email=$email;
        $this->senha=$senha;

    }

    public function login($email,$senha){
        $bd=Conexao::get();
        $query=$bd->prepare("SELECT * FROM usuario WHERE email=:email AND senha=:senha");
        $query->bindValue(":email",$email);
        $query->bindValue(":senha",$senha);
        $query->execute();
        if($query->rowCount()>0){
        $resultado=$query->fetch(PDO::FETCH_ASSOC);
        $logado= new Usuario($resultado['nome'],$resultado['email'],$resultado['senha']);
        $_SESSION['logado']=$logado;
        return 1;
        }
    }

    public function logout(){
        session_destroy();
    }

    public function insertUsuario(){
        $bd=Conexao::get();
        $query = $bd->prepare("INSERT INTO usuario (nome,email,senha) VALUES (:nome,:email,:senha)");
        $query->bindParam(':nome',$this->nome);
        $query->bindParam(':email',$this->email);
        $query->bindParam(':senha',$this->senha);
        $query->execute();
    }
   



}

?>