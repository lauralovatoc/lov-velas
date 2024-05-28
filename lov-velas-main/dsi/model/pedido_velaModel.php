<?php
require_once 'ConexaoMySql.php';
class pedido_velaModel{
    protected $id_vela;
    protected $id_pedido;
    protected $quantidade;
    protected $email;
    
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

    public function getEmail() {
        return $this->email;
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
    
    public function setEmail($email): void {
        $this->email = $email;
    }

    public function insereProduto($velasList, $quantidadesVelas, $email_user, $id_compra){
        $db = new ConexaoMysql();
        $db->Conectar();
        for ($i = 0; $i < count($velasList); $i++) {            
            $sql = 'INSERT INTO vela_pedido (id_pedido, id_vela, quantidade, email) values ("'.$id_compra.'", "'.$velasList[$i].'", "'.$quantidadesVelas[$i].'","'.$email_user.'")';
            $db->Executar($sql);
        }
        $db->Desconectar();
       
        
        return $db->total;
    }
    
    public function idVelas($id_pedido){
        $db = new ConexaoMysql;
        $db->Conectar();
        
        $sql='SELECT * from vela_pedido where id_pedido='.$id_pedido;
        $result = $db->Consultar($sql);
        
        $db->Desconectar();
        
        return $result;
    }
}