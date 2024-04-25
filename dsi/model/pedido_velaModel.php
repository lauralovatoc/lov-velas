<?php
require_once 'ConexaoMySql.php';
class pedido_velaModel{
    protected $id_vela;
    protected $id_pedido;
    protected $quantidade;
    
    public function __construct(){
        
    }
    
    public function getId_vela() {
        return $this->id_vela;
    }

    public function getId_pedido() {
        return $this->id_pedido;
    }

    public function getQuantidade() {
        return $this->quantidade;
    }

    public function setId_vela($id_vela): void {
        $this->id_vela = $id_vela;
    }

    public function setId_pedido($id_pedido): void {
        $this->id_pedido = $id_pedido;
    }

    public function setQuantidade($quantidade): void {
        $this->quantidade = $quantidade;
    }

    public function insereProduto($velasList, $quantidadesVelas, $id_compra){
        $db = new ConexaoMysql();
        $db->Conectar();
        for ($i = 0; $i < count($velasList); $i++) {            
            $sql = "INSERT INTO produto_in_compra (id_compra, id_vela, quantidade) values (".$id_compra.", ".$velasList[$i].", ".$quantidadesVelas[$i].");";
            $db->Executar($sql);
        }
        $db->Desconectar();
        return $db->total;
    }
}