<?php
    require_once "../clases/Conexion.php";
    require_once "../clases/Crud.php";
    $id = $_GET['id'];
    $obj = new Crud();
    if ($obj->eliminar($id) ==1) {
        header("location:../index.php");
    } else {
        echo "Fallo al eliminar";
    }

?>