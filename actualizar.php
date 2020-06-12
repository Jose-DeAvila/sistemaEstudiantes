<?php
	require_once('funciones.php');
	require_once('estudiantes.php');
	$funct= new crudEst();
	$students=new Estudiantes();
	$students=$funct->obtener($_GET['id']);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Actualizar Estudiante</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
</head>
<body>
    <center>
        <h1 class="mt-3 mb-5">Actualizar Usuario</h1>
    </center>
    <div class="container">
        <form action="administrar.php" method="post">
            <input type='hidden' name='id' value='<?php echo $students->getId()?>'>
            <div class="form-group">
                <label for="nombres">Nombres</label>
                <input type="text" class="form-control" id="nombres" name="nombres" value='<?php echo $students->getNombre()?>'>
            </div>
            <div class="form-group">
                <label for="apellidos">Apellidos</label>
                <input type="text" class="form-control" id="apellidos" name="apellidos" value='<?php echo $students->getApellido()?>'>
            </div>
            <div class="form-group">
                <label for="identificacion">Identificación</label>
                <input type="text" class="form-control" id="identificacion" name="identificacion" value='<?php echo $students->getIdentificacion()?>'>
            </div>
            <input type="hidden" name="actualizar" value="actualizar">
            <input type="submit" value="Guardar" class="btn btn-primary">
            <a href="index.php" class="btn btn-primary">Volver</a>
        </form>
    </div>
</body>
</html>