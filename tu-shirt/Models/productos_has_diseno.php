<?php namespace Models;
    class Producto_has_diseno{
        private $id_productos_has_diseno;
        private $fk_producto;
        private $fk_diseno;
        			
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
            $sql = "SELECT * FROM productos_has_diseno";
            $datos = $this->con->consultaRetorno($sql);
            return $datos;
        }
        public function add(){
            $sql = "INSERT INTO productos_has_diseno (id_productos_has_diseno, fk_producto, fk_diseno) VALUES (null,'{$this->fk_producto}','{$this->fk_diseno}')";
            $this->con->consultaSimple($sql);
        }
        public function delete(){
            $sql = "DELETE FROM productos_has_diseno WHERE id_productos_has_diseno = '{$this->id_productos_has_diseno}'";
            $this->con->consultaSimple($sql);
        }
         public function edit(){
            $sql = "UPDATE productos_has_diseno SET fk_producto='{$this->fk_producto}',fk_diseno='{$this->fk_diseno}', WHERE id_productos_has_diseno = '{$this->id_productos_has_diseno}'"
            $this->con->consultaSimple($sql);
        }
        public function view(){
            $sql = "SELECT * FROM productos_has_diseno WHERE id_productos_has_diseno = '{$this->id_productos_has_diseno}'";
                $datos = $this->con->consultaRetorno($sql);
                $row = mysqli_fetch_assoc($datos);
                return $row;
            }
    
    }
?>