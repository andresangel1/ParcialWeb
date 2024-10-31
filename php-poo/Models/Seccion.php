<?php namespace Models;
	
	class Seccion{
		
		//Creamos las variables para la TABLA de la base de datos
		private $id;
		private $nombre;
		
		//creamos una variable para la conexión
		private $con;

		public function __construct(){
			$this->con = new Conexion();
		}

		public function set($atributo, $contenido){
			$this->$atributo = $contenido;
		}

		public function get($atributo){
			return $this->$atributo;
		}
		//------------------------------
		
		//Listamos lo que tiene la base de datos
		public function listar(){
			$sql = "SELECT * FROM secciones";
			$datos = $this->con->consultaRetorno($sql);
			return $datos;
		}

		//Inserta un registro
		public function add(){
			$sql = "INSERT INTO secciones (id, nombre) VALUES (null, '{$this->nombre}')";
			$this->con->consultaSimple($sql);
		}

		//Elimina un registro
		public function delete(){
			$sql = "DELETE FROM secciones WHERE id = '{$this->id}'";
			$this->con->consultaRetorno($sql);
		}

		//Modifica un registro
		public function edit(){
			$sql = "UPDATE secciones SET nombre = '{$this->nombre}' WHERE id = '{$this->id}'";
			$this->con->consultaSimple($sql);
		}

		//Devuelve los datos del registro
		public function view(){
			$sql = "SELECT * FROM secciones WHERE id = '{$this->id}'";
			$datos = $this->con->consultaRetorno($sql);
			$row = mysqli_fetch_assoc($datos);
			return $row;
		}



	}

?>