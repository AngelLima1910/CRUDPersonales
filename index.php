<?php 
    include "./clases/Conexion.php";
    include "./clases/Crud.php";
    $crud = new Crud();
    $data = $crud->mostrarDatos();
?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <title>Crud</title>
</head>
<body>
    <h2 class="text-center">CRUD Datos personales</h2>
    <div class="container">
        <div class="row">
            <div class="col">
                <table class="table table-striped table-borderd nowrap" style="width: 100%;">
                <a href="./views/agregarPersona.php" class="btn btn-outline-primary">Agregar nueva persona</a>
                    <thead>
                        <th>Nombre</th>
                        <th>Apellido paterno</th>
                        <th>Apellido materno</th>
                        <th>Edad</th>
                        <th>Sexo</th>
                        <th>Editar</th>
                        <th>Eliminar</th>
                    </thead>
                    <tbody>
                        <?php foreach ($data as $key):?>
                            <tr>
                                <td><?php echo $key['nombre'];?></td>
                                <td><?php echo $key['apellidoPaterno'];?></td>
                                <td><?php echo $key['apellidoMaterno'];?></td>
                                <td><?php echo $crud->calcularEdad($key['fechaNac']);?></td>
                                <td><?php echo $key['sexo'];?></td>
                                <td></td>
                                <td>
                                    <a href="./views/eliminarPersona.php?id=<?php echo $key['id'] ?>">
                                    <button class="btn btn-danger">Eliminar</button></a>
                                </td>
                            </tr>
                        <?php endforeach;?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>
</body>
</html>