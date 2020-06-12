<?php
require_once('funciones.php');
require_once('estudiantes.php');

$funct= new crudEst();
$students= new Estudiantes();
	if (isset($_POST['insertar'])) {
		$students->setNombre($_POST['nombre']);
		$students->setApellido($_POST['apellidos']);
		$students->setIdentificacion($_POST['identificacion']);
		$funct->insertar($students);
		header('Location: index.php');
	}elseif(isset($_POST['actualizar'])){
		$students->setId($_POST['id']);
		$students->setNombre($_POST['nombres']);
		$students->setApellido($_POST['apellidos']);
		$students->setIdentificacion($_POST['identificacion']);
		$funct->actualizar($students);
		header('Location: index.php');
	}elseif ($_GET['accion']=='e') {
		$funct->eliminar($_GET['id']);
		header('Location: index.php');		
	}elseif($_GET['accion']=='a'){
		header('Location: actualizar.php');
	}
?>