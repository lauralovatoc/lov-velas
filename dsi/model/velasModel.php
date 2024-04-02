<?php

require_once 'ConexaoMysql.php';

class velasModel {
    
    protected $id_vela;
    protected $nome;
    protected $descr;
    protected $quantidade;
    protected $custo;
    protected $valor;
    protected $caminho_img;
    

    public function __construct() {
        //vazio
    }

    public function getId_vela() {
        return $this->id_vela;
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

    public function getCaminho_img() {
        return $this->caminho_img;
    }

    public function setId_vela($id_vela): void {
        $this->id_item = $id_vela;
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

    public function setCaminho_img($caminho_img): void {
        $this->caminho_img = $caminho_img;
    }

    
    //Métodos especialistas
    public function loadAll() {

        $db = new ConexaoMysql();
        $db->Conectar();

        $sql = 'SELECT * FROM vela';
        $resultList = $db->Consultar($sql);

        $db->Desconectar();

        return $resultList;
    }

    public function loadById($id_vela) {

        $db = new ConexaoMysql();
        $db->Conectar();

        $sql = 'SELECT * FROM vela where id_vela =' . $id_vela;
        $resultList = $db->Consultar($sql);

        //verifica se retornou um registro do database
        if ($db->total == 1) {
            foreach ($resultList as $value) {
                $this->id_vela = $value['id_vela'];
                $this->nome = $value['nome'];
                $this->descr = $value['descr'];
                $this->quantidade = $value['quantidade'];
                $this->custo = $value['custo'];
                $this->valor = $value['valor'];
                $this->caminho_img = $value['caminho_img'];
            }
        }
        $db->Desconectar();

        return $resultList;
    }
}
?>