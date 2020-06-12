<?php
    require_once('funciones.php');
    require_once('estudiantes.php');
    $funct=new crudEst();
    $students= new Estudiantes();
    $listEstudiantes=$funct->mostrar();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
    <title>Estudiantes</title>
</head>
<body>
    <center>
        <h1 class="mt-3 mb-5">Bienvenido Sistema Estudiantes</h1>
    </center>
    <div class="container">
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Nombres</th>
                    <th scope="col">Apellidos</th>
                    <th scope="col">Identificacion</th>
                    <th scope="col">Acciones</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($listEstudiantes as $students) {?>
                <tr>
                    <td scope="col"><?php echo $students->getId()?></td>
                    <td scope="col"><?php echo $students->getNombre() ?></td>
                    <td scope="col"><?php echo $students->getApellido() ?></td>
                    <td scope="col"><?php echo $students->getIdentificacion()?> </td>
                    <td scope="col" title="Actualizar">
                        <a class="mr-2 ml-3" href="actualizar.php?id=<?php echo $students->getId()?>&accion=a">
                        <i class="fas fa-sync-alt"></i></a>
                        <a href="administrar.php?id=<?php echo $students->getId()?>&accion=e">
                        <i class="fas fa-trash-alt"></i></a>
                    </td>
                </tr>
                <?php }?>
            </tbody>
        </table>
        <a href="ingresar.php" class="btn btn-primary"> Ingresar Estudiante </a>
    <script src="https://kit.fontawesome.com/a2a22ec152.js" crossorigin="anonymous"></script>
    </div>
</body>
</html>