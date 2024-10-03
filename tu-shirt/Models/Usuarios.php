<?php namespace Models;

    class Usuario{

        private $id_usuario;
        private $nombre;
        private $mail;
        private $contrasena;
        private $fk_id_tipo_usuario;
        private $fk_id_rol;

        						

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
            $sql = "SELECT * FROM usuarios";
            $datos = $this->con->consultaRetorno($sql);
            return $datos;

        }

        public function add(){
            $sql = "INSERT INTO usuarios (id_usuario , nombre , mail, contrasena , fk_id_tipo_usuario , fk_id_rol)
             VALUES (null,'{$this->id_usuario}
            ','{$this->nombre}','{$this->mail}
            ','{$this->contrasena}','{$this->fk_id_tipo_usuario}','{$this->fk_id_rol}')";
            
            $this->con->consultaSimple($sql);
        }

        public function delete(){
            $sql = "DELETE FROM usuarios WHERE id_usuario = '{$this->id_usuario}'";
            $this->con->consultaSimple($sql);
        }

         public function edit(){
            $sql = "UPDATE usuarios SET nombre='{$this->nombre}',mail='{$this->mail}',
            contrasena`='{$this->contrasena}',fk_id_tipo_usuario='
            {$this->fk_id_tipo_usuario}',fk_id_rol='{$this->fk_id_rol}'
             WHERE id_usuario = '{$this->id_usuario}'";
            $this->con->consultaSimple($sql);
        }

        public function view(){
            $sql = "SELECT * FROM usuarios WHERE id_usuario = '{$this->id_usuario}'";
                $datos = $this->con->consultaRetorno($sql);
                $row = mysqli_fetch_assoc($datos);
                return $row;
            }
    



    }




?>