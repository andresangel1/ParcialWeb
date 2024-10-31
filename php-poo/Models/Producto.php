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
            $sql = "SELECT t1.*, t2.tipo as categoria FROM productos t1 INNER JOIN tipo_productos t2 ON t1.fk_tipo_productos = t2.id_tipo_productos ORDER BY id DESC";
            $datos = $this->con->consultaRetorno($sql);
            return $datos;
        }
        public function add(){
            $sql = "INSERT INTO productos (id_producto, nombre, fk_tipo_productos) VALUES (null,'{$this->nombre}','{$this->fk_tipo_productos}')";
            
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
            $sql = "SELECT t1.*, t2.tipo as categoria FROM productos t1 INNER JOIN tipo_productos t2 ON t1.fk_tipo_productos = t2.id_tipo_productos WHERE t1.id_producto = '{$this->id_producto}'";
                $datos = $this->con->consultaRetorno($sql);
                $row = mysqli_fetch_assoc($datos);
                return $row;
            }
    
    }
?>