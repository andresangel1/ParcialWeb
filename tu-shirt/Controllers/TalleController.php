<?php namespace Controllers;

    use Models\Talle as Talle;

    

    class talleController{
        
        private $talle;

        public function __construct(){
            $this->talle = new Talle();
        }

        public function index(){
            $datos = $this->talle->listar();
            return $datos;
        }

        public function agregar(){
            if($_POST){
                $this->talle->set("talle",$_POST['talle']);
                $this->talle->add();
                header("Location: " . URL . "talle" );

            }
        

         }

            public function editar($id_tipo_usuario){
                if($_POST){
                    $this->talle->set("id_talle",$_POST['id_talle']);
                    $this->talle->set("talle",$_POST['talle']);
                    $this->tipo_producto>edit();
                    header("Location: " . URL . "talle" );
                }else{
                    $this->talle->set("id_talle",$id_talle);
                    $datos = $this->talle->view();
                    return $datos;

                }
            }

            public function eliminar($id_talle) {
                $this->talle->set("id_talle",$id_talle);
                $this->talle->delete();
                header("Location: " . URL . "talle" );
            }

        }

?>