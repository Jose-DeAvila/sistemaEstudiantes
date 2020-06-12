<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
    <title>Ingresar Estudiante</title>
</head>
<body>
    <center>
        <h1 class="mb-5 mt-3">Insertar nuevo estudiante</h1>
    </center>
    <div class="container">
        <form action="administrar.php" method="post">
            <div class="form-group">
                <label for="nombres">Nombres</label>
                <input type="text" class="form-control" id="nombres" name="nombre">
            </div>
            <div class="form-group">
                <label for="apellidos">Apellidos</label>
                <input type="text" class="form-control" id="apellidos" name="apellidos">
            </div>
            <div class="form-group">
                <label for="identificacion">Identificación</label>
                <input type="text" class="form-control" id="identificacion" name="identificacion">
            </div>
            <input type="hidden" name="insertar" value="insertar">
            <input type="submit" class="btn btn-primary" value="Añadir">
            <a href="index.php" class="btn btn-info">Volver</a>
        </form>
    </div>
<script src="https://kit.fontawesome.com/a2a22ec152.js" crossorigin="anonymous"></script>
</body>
</html>