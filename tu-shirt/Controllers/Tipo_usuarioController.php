<?php namespace Controllers;

    use Models\Tipo_usuario as Tipo_usuario;

    

    class tipo_usuarioController{
        
        private $tipo_usuario;
        private $tipo;

        public function __construct(){
            $this->tipo_usuario = new Tipo_usuario();
            $this->tipo = new Tipo();
        }

        public function index(){
            $datos = $this->tipo_usuario->listar();
            return $datos;
        }

        public function agregar(){
            if($_POST){
                $this->tipo_usuario->set("tipo_usuario",$_POST['tipo_usuario']);
                $this->tipo_usuario->add();
                header("Location: " . URL . "tipo_usuario" );

            }
        

         }

            public function editar($id_tipo_usuario){
                if($_POST){
                    $this->tipo_usuario->set("id_tipo_usuario",$_POST['id_tipo_usuario']);
                    $this->tipo_usuario->set("tipo",$_POST['tipo']);
                    $this->tipo_usuario->edit();
                    header("Location: " . URL . "tipo_usuario" );
                }else{
                    $this->tipo_usuario->set("id_tipo_usuario",$id_tipo_usuario);
                    $datos = $this->tipo_usuario->view();
                    return $datos;

                }
            }

            public function eliminar($id_tipo_usuario) {
                $this->tipo_usuario->set("id_tipo_usuario",$id_tipo_usuario);
                $this->tipo_usuario->delete();
                header("Location: " . URL . "tipo_usuario" );
            }

        }

?>