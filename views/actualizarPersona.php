<?php
    require_once "../clases/Conexion.php";
    require_once "../clases/Crud.php";
    $obj = new Conexion();
    $conexion = $obj->Conectar();
    $id = $_GET['id'];
    $sql = "SELECT * FROM t_personas WHERE id = '$id'";
    $result = mysqli_query($conexion, $sql);
    $ver = mysqli_fetch_row($result);
?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <title>Actualizar Datos</title>
</head>
<body>
    <div class="container">
        <div class="row">
            <div class="col">
                <form action="../procesos/actualizar.php" method="post">
                    <input type="text" hidden="" value="<?php echo $id?>" name="id">
                    <label for="nombre">Nombre</label>
                    <input type="text" name="nombre" class="form-control" value="<?php echo $ver[1]; ?>">
                    <label for="apellidoPaterno">Apellido Paterno</label>
                    <input type="text" name="apellidoPaterno" class="form-control" value="<?php echo $ver[2]; ?>">
                    <label for="apellidoMaterno">Apellido Materno</label>
                    <input type="text" name="apellidoMaterno" class="form-control" value="<?php echo $ver[3]; ?>">
                    <label for="fechaNac">Fecha de nacimiento</label>
                    <input type="date" name="fechaNac" class="form-control" value="<?php echo $ver[4]; ?>">
                    <label for="sexo" class="form-label">Sexo</label>
                    <select name="sexo" id="sexo" class="form-select" value ="<?php echo $ver[5];?>">
                        <option value="<?php echo $ver[5];?>"><?php echo $ver[5];?></option>
                        <option value="Masculino">Masculino</option>
                        <option value="Femenino">Femenino</option>
                    </select>
                    <button class="btn btn-outline-warning mt-3">Actualizar</button>
                    <a href="../index.php" class="btn btn-outline-secondary mt-3">Regresar</a>
                </form>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>
</body>
</html>
   