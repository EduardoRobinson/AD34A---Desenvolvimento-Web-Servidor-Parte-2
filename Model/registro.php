<?php

require_once('../DataBase/conexao.php');

Class Registro{
    
    public $tipo;
    public $valor;
    public $data;
    public $descricao;

    public function __construct($tipo=null,$valor=null,$data=null,$descricao=null){

        $this->tipo=$tipo;
        $this->valor=$valor;
        $this->data=$data;
        $this->descricao=$descricao;

    }

    public function alterar($id,$valor,$data,$descricao){
    $bd=Conexao::get();
    $query=$bd->prepare("UPDATE registro SET valor = :valor,data = :data,descricao =:descricao WHERE id=:id");
    $query->bindParam(":valor",$valor);
    $query->bindParam(":data",$data);
    $query->bindParam(":descricao",$descricao);
    $query->bindParam(":id",$id);
    $query->execute();

    }

    public function apagar($id){
        $bd=Conexao::get();
        $query = $bd->prepare("DELETE FROM registro where id =:id");
        $query->bindParam(':id',$id);
        $query->execute();
    }

    public function insertRegistro(){
        $bd=Conexao::get();
        $query = $bd->prepare("INSERT INTO registro (tipo,valor,data,descricao) VALUES (:tipo,:valor,:data,:descricao)");
        $query->bindParam(':tipo',$this->tipo);
        $query->bindParam(':valor',$this->valor);
        $query->bindParam(':data',$this->data);
        $query->bindParam(':descricao',$this->descricao);
        $query->execute();


    }

    public function selectRegistros(){
        $bd=Conexao::get();
        $query=$bd->prepare("SELECT * FROM registro");
        $query->execute();
        return $query->fetchAll(PDO::FETCH_ASSOC);
    }
    



}




?>