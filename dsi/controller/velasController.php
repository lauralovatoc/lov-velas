<?php
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
