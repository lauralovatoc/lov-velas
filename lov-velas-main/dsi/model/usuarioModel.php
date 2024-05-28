<?php

require_once 'ConexaoMySql.php';

class usuarioModel {
    protected $nome;
    protected $senha;
    protected $id_tipo_usuario;
    
    public function __construct() {
        //vazio
    }
    
    //getters and setters
    public function getNome() {
        return $this->nome;
    }

    public function getSenha() {
        return $this->senha;
    }

    public function getId_tipo_usuario() {
        return $this->id_tipo_usuario;
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
            
            $dbAdmin = new ConexaoMysql;
            $dbAdmin->Conectar();
            $admin = "SELECT * from usuario where id_tipo_usuario=1 and senha='$senha' and email ='$email'";
            $dbAdmin->Consultar($admin);
            $resultAdmin = $dbAdmin -> total;
            
            if($resultAdmin == 1){
                    $_SESSION['tipo_usuario']='1';
                    header('location:../adminPage.php');
                } else{
                    header('location:../velas.php');}
            
        } else {
            header('location:../login.php?cod=171');
        }
        
        $db->Desconectar();
    }
    
    public function cadastrar($nome,$email,$senha){        
        $dbemail = new ConexaoMysql();
        $dbemail->Conectar();
        
        $verificarEmail = "SELECT * FROM usuario WHERE email='$email'";
        
        $dbemail->Consultar($verificarEmail);
        $result = $dbemail -> total;
        
        if ($result>=1){
            header('location:../cadastro.php?cod=175');
        } else{
            $db = new ConexaoMySql();
            $db->Conectar();
        
            $id_tipo_usuario = 2;
            $sql = "INSERT INTO usuario (nome,email,senha,id_tipo_usuario) values ('$nome','$email','$senha','$id_tipo_usuario')";
            $db->Executar($sql);
            header('location:../login.php');
        
            $db->Desconectar();
        }
    }

}
