<?php
require_once 'ConexaoMySql.php';
class pedidoModel{
    protected $id_pedido;
    protected $data_compra;
    protected $valor_total;
    protected $email;
    protected $status_pedido;

    public function __construct(){
        
    }
    
    public function getStatus_pedido() {
        return $this->status_pedido;
    }

    public function setStatus_pedido($status_pedido): void {
        $this->status_pedido = $status_pedido;
    }

        
    public function getId_pedido() {
        return $this->id_pedido;
    }

    public function getData_compra() {
        return $this->data_compra;
    }

    public function getValor_total() {
        return $this->valor_total;
    }

    public function getEmail() {
        return $this->email;
    }

    public function setId_pedido($id_pedido): void {
        $this->id_pedido = $id_pedido;
    }

    public function setData_compra($data_compra): void {
        $this->data_compra = $data_compra;
    }

    public function setValor_total($valor_total): void {
        $this->valor_total = $valor_total;
    }

    public function setEmail($email): void {
        $this->email = $email;
    }

    public function realizarCompra(){
        $db = new ConexaoMysql();
        $db->Conectar();
        $sql = 'INSERT INTO pedido (email, valor_total,status_pedido) values ("'.$this->email.'", "'.$this->valor_total.'",1);';

        $id_compra = $db->Executar($sql);
        $db->Desconectar();
        
        return $id_compra;
    }
    
    public function mostrarCompras($email){
        $db = new ConexaoMysql();
        $db->Conectar();
        $sql = "SELECT * from pedido where email='$email'";
        
        $comprasAnteriores = $db->Consultar($sql);
        $db->Desconectar();
        
        if($comprasAnteriores->num_rows==0){
            $comprasAnteriores = null;
        }

        return $comprasAnteriores;
    }
    
    public function loadPedidos(){
        $db = new ConexaoMysql();
        $db->Conectar();
        
        $sql="SELECT * from pedido";
        
        $result = $db->Consultar($sql);
        $db->Desconectar();
        
        return $result;
    }
    
    public function aprovar($pedido){
        $db = new ConexaoMysql();
        $db->Conectar();
        
        $sql = "UPDATE pedido SET status_pedido = 2 where id_pedido='$pedido'";
        $db->Executar($sql);
        header('location:../pedidos.php');
        $db->Desconectar();
    }
}
