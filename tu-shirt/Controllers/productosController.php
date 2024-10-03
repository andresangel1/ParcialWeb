<?php namespace Controllers;

    use Models\productos as Producto;

    

    class productosController{
        
        private $productos;

        public function __construct(){
            $this->productos = new Producto();
        }

        public function index(){
            $datos = $this->productos->listar();
            return $datos;
        }

        public function agregar(){
            if($_POST){
                $this->productos->set("producto",$_POST['producto']);
                $this->productos->add();
                header("Location: " . URL . "productos" );

            }
        

         }

            public function editar($id_producto){
                if($_POST){
                    $this->productos->set("id_producto",$_POST['id_producto']);
                    $this->productos->set("nombre",$_POST['nombre']);
                    $this->productos->set("fk_tipo_producto",$_POST['fk_tipo_producto']);
                    $this->productos->edit();
                    header("Location: " . URL . "productos" );

                }
            }

            public function eliminar($id_producto) {
                $this->productos->set("id_producto",$id_producto);
                $this->productos->delete();
                header("Location: " . URL . "productos" );
            }






        }


    






?>