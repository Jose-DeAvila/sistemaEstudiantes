<?php
require_once('conexion.php');

	class crudEst{
		public function __construct(){}
		public function insertar($students){
			$db=Db::conectar();
			$insert=$db->prepare('INSERT INTO estudiante values(NULL,:nombre,:apellido,:identificacion)');
			$insert->bindValue('nombre',$students->getNombre());
			$insert->bindValue('apellido',$students->getApellido());
			$insert->bindValue('identificacion',$students->getIdentificacion());
			$insert->execute();
		}
		public function mostrar(){
			$db=Db::conectar();
			$listaEstudiantes=[];
			$select=$db->query('SELECT * FROM estudiante');

			foreach($select->fetchAll() as $estudiantes){
				$students= new Estudiantes();
				$students->setId($estudiantes['id']);
				$students->setNombre($estudiantes['nombre']);
				$students->setApellido($estudiantes['apellido']);
				$students->setIdentificacion($estudiantes['identificacion']);
				$listaEstudiantes[]=$students;
			}
			return $listaEstudiantes;
		}
		public function eliminar($id){
			$db=Db::conectar();
			$eliminar=$db->prepare('DELETE FROM estudiante WHERE ID=:id');
			$eliminar->bindValue('id',$id);
			$eliminar->execute();
		}
		public function obtener($id){
			$db=Db::conectar();
			$select=$db->prepare('SELECT * FROM estudiante WHERE ID=:id');
			$select->bindValue('id',$id);
			$select->execute();
			$estudiantes=$select->fetch();
			$students= new Estudiantes();
			$students->setId($estudiantes['id']);
			$students->setNombre($estudiantes['nombre']);
			$students->setApellido($estudiantes['apellido']);
			$students->setIdentificacion($estudiantes['identificacion']);
			return $students;
		}
		public function actualizar($students){
			$db=Db::conectar();
			$actualizar=$db->prepare('UPDATE estudiante SET nombre=:nombre, apellido=:apellido,
			identificacion=:identificacion  WHERE ID=:id');
			$actualizar->bindValue('id',$students->getId());
			$actualizar->bindValue('nombre',$students->getNombre());
			$actualizar->bindValue('apellido',$students->getApellido());
			$actualizar->bindValue('identificacion',$students->getIdentificacion());
			$actualizar->execute();
		}
	}
?>