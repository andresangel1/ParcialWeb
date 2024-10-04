<?php namespace Models;
    class productos_has_talles{
        private $id_productos_has_tallescol;
        private $fk_id_producto;
        private $fk_id_talle;
        			
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
            $sql = "SELECT * FROM productos_has_talles";
            $datos = $this->con->consultaRetorno($sql);
            return $datos;
        }
        public function add(){
            $sql = "INSERT INTO productos_has_talles (fk_id_producto, fk_id_talle, id_productos_has_tallescol) VALUES ('{$this->fk_id_producto}','{$this->fk_id_talle}',null)";
            $this->con->consultaSimple($sql);
        }
        public function delete(){
            $sql = "DELETE FROM productos_has_talles WHERE id_productos_has_tallescol = '{$this->id_productos_has_tallescol}'";
            $this->con->consultaSimple($sql);
        }
         public function edit(){
            $sql = "UPDATE productos_has_talles SET fk_id_producto='{$this->fk_id_producto}',fk_id_talle='{$this->fk_id_talle}', WHERE id_productos_has_tallescol = '{$this->id_productos_has_tallescol}'"
            $this->con->consultaSimple($sql);
        }
        public function view(){
            $sql = "SELECT * FROM productos_has_talles WHERE id_productos_has_tallescol = '{$this->id_productos_has_tallescol}'";
                $datos = $this->con->consultaRetorno($sql);
                $row = mysqli_fetch_assoc($datos);
                return $row;
            }
    
    }
?>