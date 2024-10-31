<?php namespace Models;

    class Color{

        private $id_color;
        private $color;


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
            $sql = "SELECT * FROM colores";
            $datos = $this->con->consultaRetorno($sql);
            return $datos;

        }

        public function add(){
            $sql = "INSERT INTO colores (id_color,color) VALUES (null, '{$this->color}')";
            $this->con->consultaSimple($sql);
        }

        public function delete(){
            $sql = "DELETE FROM colores WHERE id_color = '{$this->id_color}'";
            $this->con->consultaSimple($sql);
        }

         public function edit(){
            $sql = "UPDATE colores SET color = '{$this->color}' WHERE  id_color = '{$this->id_color}'";
            $this->con->consultaSimple($sql);
        }

        public function view(){
            $sql = "SELECT * FROM colores WHERE id_color = '{$this->id_color}'";
                $datos = $this->con->consultaRetorno($sql);
                $row = mysqli_fetch_assoc($datos);
                return $row;
            }
    



    }




?>