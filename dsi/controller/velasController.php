<?php
function loadAll() {
    require_once './model/velasModel.php';
    $velas = new velasModel();
    $velasList = $velas->loadAll();

    return $velasList;
}

function loadById($id_item) {
    require_once './model/velasModel.php';
    $velas = new velasModel();

    $velas->loadById($id_item);

    return $velas;
}
?>