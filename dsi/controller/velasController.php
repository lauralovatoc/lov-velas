<?php
if($_POST){
    require_once '../model/velasModel.php';
    
    $nome_registrado = $_POST['nome'];
    $email_registrado = $_POST['email'];
    $senha_registrada = $_POST['senha'];
    
    $velas = new velasModel();
    $velas->insert($nome_registrado,$email_registrado,$senha_registrada);
}
function loadAll() {
    require_once './model/velasModel.php';
    $velas = new velasModel();
    $velasList = $velas->loadAll();

    return $velasList;
}

function loadById($id_vela) {
    require_once './model/velasModel.php';
    $velas = new velasModel();

    $velas->loadById($id_vela);

    return $velas;
}
?>
