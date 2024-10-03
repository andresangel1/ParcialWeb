<?php namespace Models;

    class Usuario{

        private $id_talle;
        private $talle;

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
            $sql = "SELECT * FROM talle";
            $datos = $this->con->consultaRetorno($sql);
            return $datos;

        }

        public function add(){
            $sql = "INSERT INTO talle (id_talle  , talle)
             VALUES (null,'{$this->id_talle}
            ','{$this->talle}')";
            
            $this->con->consultaSimple($sql);
        }

        public function delete(){
            $sql = "DELETE FROM talle WHERE id_talle = '{$this->id_talle}'";
            $this->con->consultaSimple($sql);
        }

         public function edit(){
            $sql = "UPDATE talle SET talle='{$this->talle}' WHERE id_talle = '{$this->id_talle}'";
            $this->con->consultaSimple($sql);
        }

        public function view(){
            $sql = "SELECT * FROM talle WHERE id_talle = '{$this->id_talle}'";
                $datos = $this->con->consultaRetorno($sql);
                $row = mysqli_fetch_assoc($datos);
                return $row;
            }

    }

?>