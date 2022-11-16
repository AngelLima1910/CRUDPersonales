<?php 
    include "../clases/Conexion.php";
    include "../clases/Crud.php";
    $nombre = $_POST['nombre'];
    $apellidoPaterno = $_POST['apellidoPaterno'];
    $apellidoMaterno = $_POST['apellidoMaterno'];
    $fechaNac = $_POST['fechaNac'];
    $sexo = $_POST['sexo'];
    $data = array(
        $nombre,
        $apellidoPaterno,
        $apellidoMaterno,
        $fechaNac,
        $sexo
    );
    $obj = new Crud();
    if ($obj->insertarDatos($data) == 1) {
        header("location:../index.php");
    } else {
        echo "Fallo al agregar";
    }
?>