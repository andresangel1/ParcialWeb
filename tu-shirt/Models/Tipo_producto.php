<?php namespace Models;

    class Usuario{

        private $id_tipo_producto;
        private $tipo_producto;
        private $tipo;

        private $con;

        public function __construct(){
            $this->con = new Conexion();
        }

        public function set($atributo,$contenido){
            $this->$atributo = $contenido;
        }

        public function get($atributo){
            return $this->$atributo;
        }



        public function listar(){
            $sql = "SELECT * FROM tipo_producto";
            $datos = $this->con->consultaRetorno($sql);
            return $datos;

        }

        public function add(){
            $sql = "INSERT INTO producto (id_tipo_producto , tipo_producto , tipo)
             VALUES (null,'{$this->id_tipo_producto}
            ','{$this->tipo_producto}','{$this->tipo}')";
            
            $this->con->consultaSimple($sql);
        }

        public function delete(){
            $sql = "DELETE FROM tipo_producto WHERE id_tipo_producto = '{$this->id_tipo_producto}'";
            $this->con->consultaSimple($sql);
        }

         public function edit(){
            $sql = "UPDATE tipo_producto SET tipo='{$this->tipo}' WHERE id_tipo_producto = '{$this->id_tipo_producto}'";
            $this->con->consultaSimple($sql);
        }

        public function view(){
            $sql = "SELECT * FROM tipo_producto WHERE id_tipo_producto = '{$this->id_tipo_producto}'";
                $datos = $this->con->consultaRetorno($sql);
                $row = mysqli_fetch_assoc($datos);
                return $row;
            }

    }

?>