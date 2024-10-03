<?php namespace Models;

    class Usuario{

        private $id_tipo_usuario;
        private $tipo_usuario;
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
            $sql = "SELECT * FROM tipo_usuario";
            $datos = $this->con->consultaRetorno($sql);
            return $datos;

        }

        public function add(){
            $sql = "INSERT INTO usuarios (id_tipo_usuario , tipo_usuario , tipo)
             VALUES (null,'{$this->id_tipo_usuario}
            ','{$this->tipo_usuario}','{$this->tipo}')";
            
            $this->con->consultaSimple($sql);
        }

        public function delete(){
            $sql = "DELETE FROM tipo_usuario WHERE id_tipo_usuario = '{$this->id_tipo_usuario}'";
            $this->con->consultaSimple($sql);
        }

         public function edit(){
            $sql = "UPDATE tipo_usuario SET tipo='{$this->tipo}' WHERE id_tipo_usuario = '{$this->id_tipo_usuario}'";
            $this->con->consultaSimple($sql);
        }

        public function view(){
            $sql = "SELECT * FROM tipo_usuario WHERE id_tipo_usuario = '{$this->id_tipo_usuario}'";
                $datos = $this->con->consultaRetorno($sql);
                $row = mysqli_fetch_assoc($datos);
                return $row;
            }

    }

?>