<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <title>Agregar persona</title>
</head>
<body>
    <div class="container">
        <div class="row">
            <div class="col">
                <h2 class="text-center">Agregar nueva persona</h2>
                <form action="../procesos/insertar.php" method="POST">
                    <label for="nombre">Nombre</label>
                    <input type="text" name="nombre" class="form-control" required>
                    <label for="apellidoPaterno">Apellido Paterno</label>
                    <input type="text" name="apellidoPaterno" class="form-control" required>
                    <label for="apellidoMaterno">Apellido Materno</label>
                    <input type="text" name="apellidoMaterno" class="form-control" required>
                    <label for="fechaNac">Fecha de nacimiento</label>
                    <input type="date" name="fechaNac" class="form-control" required>
                    <label for="sexo" class="form-label">Sexo</label>
                    <select name="sexo" id="" class="form-control">
                        <option value="Masculino">Masculino</option>
                        <option value="Femenino">Femenino</option>
                    </select>
                    <button class="btn btn-outline-primary mt-3">Agregar</button>
                    <a class="btn btn-outline-secondary mt-3" href="../index.php">Regresar</a>
                </form>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>
</body>
</html>