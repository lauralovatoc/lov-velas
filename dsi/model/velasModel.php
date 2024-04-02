<?php

require_once 'ConexaoMysql.php';

class velasModel {
    
    protected $id_item;
    protected $nome;
    protected $descr;
    protected $quantidade;
    protected $custo;
    protected $valor;
    protected $data_cadastro;
    

    public function __construct() {
        //vazio
    }

    public function getId_item() {
        return $this->id_item;
    }

    public function getNome() {
        return $this->nome;
    }

    public function getDescr() {
        return $this->descr;
    }

    public function getQuantidade() {
        return $this->quantidade;
    }

    public function getCusto() {
        return $this->custo;
    }

    public function getValor() {
        return $this->valor;
    }

    public function getData_cadastro() {
        return $this->data_cadastro;
    }

    public function setId_item($id_item): void {
        $this->id_item = $id_item;
    }

    public function setNome($nome): void {
        $this->nome = $nome;
    }

    public function setDescr($descr): void {
        $this->descr = $descr;
    }

    public function setQuantidade($quantidade): void {
        $this->quantidade = $quantidade;
    }

    public function setCusto($custo): void {
        $this->custo = $custo;
    }

    public function setValor($valor): void {
        $this->valor = $valor;
    }

    public function setData_cadastro($data_cadastro): void {
        $this->data_cadastro = $data_cadastro;
    }

    
    //Métodos especialistas
    public function loadAll() {

        $db = new ConexaoMysql();
        $db->Conectar();

        $sql = 'SELECT * FROM item';
        $resultList = $db->Consultar($sql);

        $db->Desconectar();

        return $resultList;
    }

    public function loadById($id_item) {

        $db = new ConexaoMysql();
        $db->Conectar();

        $sql = 'SELECT * FROM item where id_item =' . $id_item;
        $resultList = $db->Consultar($sql);

        //verifica se retornou um registro do database
        if ($db->total == 1) {
            foreach ($resultList as $value) {
                $this->id_item = $value['id_item'];
                $this->nome = $value['nome'];
                $this->descr = $value['descr'];
                $this->quantidade = $quantidade['quantidade'];
                $this->custo = $custo['custo'];
                $this->valor = $valor['valor'];
                $this->data_cadastro = $data_cadastro['data_cadastro'];
            }
        }
        $db->Desconectar();

        return $resultList;
    }
}
?>