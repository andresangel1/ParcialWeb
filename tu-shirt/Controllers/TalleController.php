<?php namespace Controllers;

    use Models\Talle as Talle;

    

    class talleController{
        
        private $talles;

        public function __construct(){
            $this->talles = new Talle();
        }

        public function index(){
            $datos = $this->talles->listar();
            return $datos;
        }

        public function agregar(){
            if($_POST){
                $this->talles->set("talle",$_POST['talle']);
                $this->talles->add();
                header("Location: " . URL . "talle" );

            }
        

         }

            public function editar($id_tipo_usuario){
                if($_POST){
                    $this->talles->set("id_talle",$_POST['id_talle']);
                    $this->talles->set("talle",$_POST['talle']);
                    $this->tipo_producto>edit();
                    header("Location: " . URL . "talles" );
                }else{
                    $this->talles->set("id_talle",$id_talle);
                    $datos = $this->talles->view();
                    return $datos;

                }
            }

            public function eliminar($id_talle) {
                $this->talles->set("id_talle",$id_talle);
                $this->talles->delete();
                header("Location: " . URL . "talles" );
            }

        }

?>