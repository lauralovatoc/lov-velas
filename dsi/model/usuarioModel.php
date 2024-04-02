<?php

require_once 'ConexaoMySql.php';

class usuarioModel {
    protected $id_usuario;
    protected $nome;
    protected $senha;
    protected $id_tipo_usuario;
    
    public function __construct() {
        //vazio
    }
    
    //getters and setters
    public function getId_usuario() {
        return $this->id_usuario;
    }

    public function getNome() {
        return $this->nome;
    }

    public function getSenha() {
        return $this->senha;
    }

    public function getId_tipo_usuario() {
        return $this->id_tipo_usuario;
    }

    public function setId_usuario($id_usuario): void {
        $this->id_usuario = $id_usuario;
    }

    public function setNome($nome): void {
        $this->nome = $nome;
    }

    public function setSenha($senha): void {
        $this->senha = $senha;
    }

    public function setId_tipo_usuario($id_tipo_usuario): void {
        $this->id_tipo_usuario = $id_tipo_usuario;
    }

    //métodos especialistas
    public function login($email,$senha){
        $db = new ConexaoMysql();
        $db->Conectar();
        
        $sql = "SELECT * FROM usuario where email ='$email'and senha ='$senha'";
        
        $db->Consultar($sql);
        $result = $db->total;
        
        if($result>=1){
            session_start();
            
            $_SESSION['login']=$email;
            
            header('location:../velas.php');
            
        } else {
            header('location:../login.php?cod=171');
        }
        
        $db->Desconectar();
    }
    
    public function cadastrar($nome,$email,$senha){
        $db = new ConexaoMySql();
        $db->Conectar();
        
        $id_tipo_usuario = 2;
        
        $sql = "INSERT INTO usuario (nome,email,senha,id_tipo_usuario) values ('$nome','$email','$senha','$id_tipo_usuario')";
        
        $db->Executar($sql);
        
        header('location:../login.php');
        
        $db->Desconectar();
    }
    
    public function loadAdmin($id_tipo_usuario){
        $db = new ConexaoMySql();
        $db-> Conectar();
        
        if ($id_tipo_usuario==1){
            $sql = "SELECT * from usuario where $id_tipo_usuario=1";
            
            $db->Consultar($sql);
        }
        
        if($result>=1){
            session_start();
            
            $_SESSION['tipo_usuario']=$id_tipo_usuario;
            
            header('location:../adminPage.php');
            
        } else {
            header('location:../index.php?cod=174');
        }
        
        $result = $db->total;
        $db->Desconectar();
    }
}
