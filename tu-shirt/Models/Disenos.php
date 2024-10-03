<?php namespace Models;

    class Diseno{

        private $id_diseno;
        private $diseno;


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
            $sql = "SELECT * FROM disenos";
            $datos = $this->con->consultaRetorno($sql);
            return $datos;

        }

        public function add(){
            $sql = "INSERT INTO disenos (id_diseno,diseno) VALUES (null, '{$this->diseno}')";
            $this->con->consultaSimple($sql);
        }

        public function delete(){
            $sql = "DELETE FROM disenos WHERE id_diseno = '{$this->id_diseno}'";
            $this->con->consultaSimple($sql);
        }

         public function edit(){
            $sql = "UPDATE disenos SET diseno = '{$this->diseno}' WHERE  id_diseno = '{$this->id_diseno}'";
            $this->con->consultaSimple($sql);
        }

        public function view(){
            $sql = "SELECT * FROM disenos WHERE id_diseno = '{$this->id_diseno}'";
                $datos = $this->con->consultaRetorno($sql);
                $row = mysqli_fetch_assoc($datos);
                return $row;
            }
    



    }




?>