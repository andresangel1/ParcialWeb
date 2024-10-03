<?php namespace Models;
    class Roles{
        private $id_rol;
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
            $sql = "SELECT * FROM roles";
            $datos = $this->con->consultaRetorno($sql);
            return $datos;
        }
        public function add(){
            $sql = "INSERT INTO roles (id_rol, tipo) VALUES (null,'{$this->id_rol}','{$this->tipo}')";
            
            $this->con->consultaSimple($sql);
        }
        public function delete(){
            $sql = "DELETE FROM roles WHERE id_rol = '{$this->id_rol}'";
            $this->con->consultaSimple($sql);
        }
         public function edit(){
            $sql = "UPDATE roles SET id_rol='{$this->id_rol}',tipo='{$this->tipo}' WHERE id_rol = '{$this->id_rol}'";
            $this->con->consultaSimple($sql);
        }
        public function view(){
            $sql = "SELECT * FROM roles WHERE id_rol = '{$this->id_rol}'";
                $datos = $this->con->consultaRetorno($sql);
                $row = mysqli_fetch_assoc($datos);
                return $row;
            }
    
    }
?>