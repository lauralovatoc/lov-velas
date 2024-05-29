<?php

require_once 'ConexaoMysql.php';

class velasModel {
    
    public $id_vela;
    public $nome;
    public $descr;
    public $quantidade;
    public $valor;
    public $caminho_img;
    

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

    public function getValor() {
        return $this->valor;
    }

    public function getCaminho_img() {
        return $this->caminho_img;
    }

    public function setId_vela($id_vela): void {
        $this->id_vela = $id_vela;
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

        if ($db->total == 1) {
            foreach ($resultList as $value) {
                $this->id_vela = $value['id_vela'];
                $this->nome = $value['nome'];
                $this->descr = $value['descr'];
                $this->quantidade = $value['quantidade'];
                $this->valor = $value['valor'];
                $this->caminho_img = $value['caminho_img'];
            }
        }
        $db->Desconectar();

        return $resultList;
    }
    
    public function insert($nome,$descr,$quantidade,$valor,$caminho_img) {
        $db = new ConexaoMysql();
        $db->Conectar();

        $sql = "INSERT INTO vela(nome,descr,quantidade,valor,caminho_img) values('$nome','$descr','$quantidade','$valor','$caminho_img')";
    
  
        $db->Executar($sql);
        
        header('location:../adminPage.php');
        
        $db->Desconectar();

        return $db->total;
    }
    
    public function delete() {
        $db = new ConexaoMysql();
        $db->Conectar();
    
        $sql = 'DELETE FROM vela WHERE id_vela='.$this->id_vela;
        header('location:../adminPage.php');
        $db->Executar($sql);
        $db->Desconectar();
    }
    
    
    public function buscar($pesquisar){
        $db = new ConexaoMysql();
        $db->Conectar();
        
        $sql =  'SELECT nome from vela WHERE nome LIKE '%$pesquisar%' LIMIT 5';
        $result=$db->Consultar($sql);
        
        $db->Desconectar();
        return $result;
    }
}

?>