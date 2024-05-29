<?php
if($_POST){
    require_once '../model/velasModel.php';
    
    $nome = $_POST['nome'];
    $descr = $_POST['descr'];
    $quantidade = $_POST['quantidade'];
    $valor = $_POST['valor'];
    $caminho_img = $_POST['caminho_img'];
    
    $caminho_img = 'img/' . $caminho_img;
    
    $velas = new velasModel();
    $velas->insert($nome,$descr,$quantidade,$valor,$caminho_img);
        

 
}

@$cod = $_REQUEST['cod'];
            if (isset($cod)) {

            if ($cod == 'del'){
            require_once '../model/velasModel.php';
            $velas = new velasModel();
        
            if (isset($_REQUEST['id_vela'])){
                $velas->setId_vela($_REQUEST['id_vela']);
                $velas->delete();
            }
            }
            
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