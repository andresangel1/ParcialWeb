<?php namespace Controllers;

    use Models\Tipo_Producto as Tipo_producto;

    

    class tipo_usuarioController{
        
        private $tipo_producto;
        private $tipo;

        public function __construct(){
            $this->tipo_producto = new Tipo_producto();
            $this->tipo = new Tipo();
        }

        public function index(){
            $datos = $this->tipo_producto->listar();
            return $datos;
        }

        public function agregar(){
            if($_POST){
                $this->tipo_producto->set("tipo_producto",$_POST['tipo_producto']);
                $this->tipo_producto->add();
                header("Location: " . URL . "tipo_producto" );

            }
        

         }

            public function editar($id_tipo_usuario){
                if($_POST){
                    $this->tipo_producto->set("id_tipo_producto",$_POST['id_tipo_producto']);
                    $this->tipo_producto->set("tipo",$_POST['tipo']);
                    $this->tipo_producto>edit();
                    header("Location: " . URL . "tipo_producto" );
                }else{
                    $this->tipo_producto->set("id_tipo_producto",$id_tipo_producto);
                    $datos = $this->tipo_producto->view();
                    return $datos;

                }
            }

            public function eliminar($id_tipo_producto) {
                $this->tipo_producto->set("id_tipo_producto",$id_tipo_producto);
                $this->tipo_producto->delete();
                header("Location: " . URL . "tipo_producto" );
            }

        }

?>