<?php 
    include "../clases/Conexion.php";
    include "../clases/Crud.php";
    $id = $_GET['id'];
    $crud = new Crud();
    $data = $crud->mostrarDatos();
?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <title>Eliminar persona</title>
</head>
<body>
    <div class="container">
        <div class="row">
            <div class="col">
                <h2>Eliminar persona</h2>
                <table class="table table-striped table-borderd nowrap" style="width: 100%;">
                    <thead>
                        <th>Nombre</th>
                        <th>Apellido paterno</th>
                        <th>Apellido materno</th>
                        <th>Edad</th>
                        <th>Sexo</th>
                    </thead>
                    <tbody>
                        <?php foreach ($data as $key):?>
                            <tr>
                                <td><?php echo $key['nombre'];?></td>
                                <td><?php echo $key['apellidoPaterno'];?></td>
                                <td><?php echo $key['apellidoMaterno'];?></td>
                                <td><?php echo $crud->calcularEdad($key['fechaNac']);?></td>
                                <td><?php echo $key['sexo'];?></td>
                            </tr>
                        <?php endforeach;?>
                    </tbody>
                </table>
                <a href="../procesos/eliminar.php?id=<?php echo $key['id']?>" class="btn btn-danger">Eliminar</a>
                <a href="../index.php" class="btn btn-secondary">Regresar</a>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>
</body>
</html>