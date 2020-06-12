<?php
	class Estudiantes{
		private $id;
		private $nombre;
		private $apellido;
		private $identificacion;

		function __construct(){}

		public function getNombre(){
		return $this->nombre;
		}

		public function setNombre($nombre){
			$this->nombre = $nombre;
		}

		public function getApellido(){
			return $this->apellido;
		}

		public function setApellido($apellido){
			$this->apellido = $apellido;
		}

		public function getIdentificacion(){
		return $this->identificacion;
		}

		public function setIdentificacion($identificacion){
			$this->identificacion = $identificacion;
		}
		public function getId(){
			return $this->id;
		}

		public function setId($id){
			$this->id = $id;
		}
	}
?>