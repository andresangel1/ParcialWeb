<?php namespace Models;

    class Tipo_producto{

        private $id_tipo_productos;
        private $tipo;

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



        public function listar(){
			$sql = "SELECT * FROM tipo_productos";
			$datos = $this->con->consultaRetorno($sql);
			return $datos;
		}


        public function add(){
            $sql = "INSERT INTO tipo_productos (id_tipo_productos, tipo)
             VALUES (null,'{$this->tipo}')";
            
            $this->con->consultaSimple($sql);
        }

        public function delete(){
			$sql = "DELETE FROM tipo_productos WHERE id_tipo_productos = '{$this->id_tipo_productos}'";
			$this->con->consultaRetorno($sql);
		}


        public function edit(){
			$sql = "UPDATE tipo_productos SET tipo = '{$this->tipo}' WHERE id_tipo_productos = '{$this->id_tipo_productos}'";
			$this->con->consultaSimple($sql);
		}


            public function view(){
                $sql = "SELECT * FROM tipo_productos WHERE id_tipo_productos = '{$this->id_tipo_productos}'";
                $datos = $this->con->consultaRetorno($sql);
                $row = mysqli_fetch_assoc($datos);
                return $row;
            }


    }

?>