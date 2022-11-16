<?php
    require_once "../clases/Conexion.php";
    require_once "../clases/Crud.php";
    $nombre = $_POST['nombre'];
    $apellidoPaterno = $_POST['apellidoPaterno']; 
    $apellidoMaterno = $_POST['apellidoMaterno']; 
    $fechaNac = $_POST['fechaNac']; 
    $sexo = $_POST['sexo']; 
    $id = $_POST['id'];
    $data = array(
        $nombre, $apellidoPaterno, $apellidoMaterno, $fechaNac, $sexo, $id
    );
    $obj = new Crud();
    if ($obj->actualizarDatos($data) ==1) {
        header("location:../index.php");
    } else {
        echo "Fallo al eliminar";
    }
?>

