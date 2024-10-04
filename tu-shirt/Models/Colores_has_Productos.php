<?php namespace Models;

    class Color_has_Producto{

        private $colores_id_color;
        private $productos_id_producto;
        private $id_colores_has_productos;
        			



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
            $sql = "SELECT * FROM colores_has_productos";
            $datos = $this->con->consultaRetorno($sql);
            return $datos;

        }

        public function add(){
            $sql = "INSERT INTO colores_has_productos (colores_id_color, productos_id_producto, id_colores_has_productos) VALUES ('{$this->colores_id_color}','{$this->productos_id_producto}',null)";
            $this->con->consultaSimple($sql);
        }

        public function delete(){
            $sql = "DELETE FROM colores_has_productos WHERE id_colores_has_productos = '{$this->id_colores_has_productos}'";
            $this->con->consultaSimple($sql);
        }

         public function edit(){
            $sql = "UPDATE colores_has_productos SET colores_id_color='{$this->colores_id_color}',productos_id_producto='{$this->productos_id_producto}', WHERE id_colores_has_productos = '{$this->id_colores_has_productos}'";
            $this->con->consultaSimple($sql);
        }

        public function view(){
            $sql = "SELECT * FROM colores_has_productos WHERE id_colores_has_productos = '{$this->id_colores_has_productos}'";
                $datos = $this->con->consultaRetorno($sql);
                $row = mysqli_fetch_assoc($datos);
                return $row;
            }
    



    }




?>