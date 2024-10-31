<?php namespace Models;

    class Pedido{

        private $id_pedido;
        private $fk_id_usuario;
        private $imagen;
        private $colores_has_productos_id_colores_has_productos;
        private $fk_id_productos_has_tallescol;
        private $fk_id_productos_has_diseno;

        						

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
            $sql = "SELECT * FROM pedidos";
            $datos = $this->con->consultaRetorno($sql);
            return $datos;

        }

        public function add(){
            $sql = "INSERT INTO pedidos (id_pedido, fk_id_usuario, imagen, colores_has_productos_id_colores_has_productos, fk_id_productos_has_tallescol, fk_id_productos_has_diseno) VALUES (null,'{$this->fk_id_usuario}','{$this->imagen}','{$this->colores_has_productos_id_colores_has_productos}','{$this->fk_id_productos_has_tallescol}','{$this->fk_id_productos_has_diseno}')";
            
            $this->con->consultaSimple($sql);
        }

        public function delete(){
            $sql = "DELETE FROM pedidos WHERE id_pedido = '{$this->id_pedido}'";
            $this->con->consultaSimple($sql);
        }

         public function edit(){
            $sql = "UPDATE pedidos SET fk_id_usuario='{$this->fk_id_usuario}',imagen='{$this->imagen}',colores_has_productos_id_colores_has_productos`='{$this->colores_has_productos_id_colores_has_productos}',fk_id_productos_has_tallescol='{$this->fk_id_productos_has_tallescol}',fk_id_productos_has_diseno='{$this->fk_id_productos_has_diseno}' WHERE id_pedido = '{$this->id_pedido}'";
            $this->con->consultaSimple($sql);
        }

        public function view(){
            $sql = "SELECT * FROM pedidos WHERE id_pedido = '{$this->id_pedido}'";
                $datos = $this->con->consultaRetorno($sql);
                $row = mysqli_fetch_assoc($datos);
                return $row;
            }
    



    }




?>