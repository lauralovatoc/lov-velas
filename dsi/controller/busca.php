<?php
if($_POST){
    require_once '../model/velasModel.php';
   $pesquisar = $_POST['buscar'];
    
    $result = new velasModel();
    $result = buscar($pesquisar);
}

    
    

//    while($rows_cursos = mysqli_fetch_array($resultado_cursos)){
//        echo "Nome do curso: ".$rows_cursos['nome']."<br>";
//    }