<?php namespace Models;
    class Producto{
        private $id_producto;
        private $nombre;
        private $fk_tipo_productos;
        						
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
            $sql = "SELECT * FROM productos";
            $datos = $this->con->consultaRetorno($sql);
            return $datos;
        }
        public function add(){
            $sql = "INSERT INTO productos (id_producto, nombre, fk_tipo_producto) VALUES (null,'{$this->nombre}','{$this->fk_tipo_productos}')";
            
            $this->con->consultaSimple($sql);
        }
        public function delete(){
            $sql = "DELETE FROM productos WHERE id_producto = '{$this->id_producto}'";
            $this->con->consultaSimple($sql);
        }
         public function edit(){
            $sql = "UPDATE productos SET nombre='{$this->nombre}',fk_tipo_productos`='{$this->fk_tipo_productos}' WHERE id_producto = '{$this->id_producto}'";
            $this->con->consultaSimple($sql);
        }
        public function view(){
            $sql = "SELECT * FROM productos WHERE id_producto = '{$this->id_producto}'";
                $datos = $this->con->consultaRetorno($sql);
                $row = mysqli_fetch_assoc($datos);
                return $row;
            }
    
    }
?>