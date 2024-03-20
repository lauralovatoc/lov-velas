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
    
}
