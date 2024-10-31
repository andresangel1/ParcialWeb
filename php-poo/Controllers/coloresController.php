<?php namespace Controllers;

    use Models\Color as Color;

    

    class coloresController{
        
        private $colores;

        public function __construct(){
            $this->colores = new Color();
        }

        public function index(){
            $datos = $this->colores->listar();
            return $datos;
        }

        public function agregar(){
            if($_POST){
                $this->colores->set("color",$_POST['color']);
                $this->colores->add();
                header("Location: " . URL . "colores" );

            }
        

         }

            public function editar($id_color){
                if($_POST){
                    $this->colores->set("id_color",$_POST['id_color']);
                    $this->colores->set("color",$_POST['color']);
                    $this->colores->edit();
                    header("Location: " . URL . "colores" );
                }else{
                    $this->colores->set("id_color",$id_color);
                    $datos = $this->colores->view();
                    return $datos;

                }
            }

            public function eliminar($id_color) {
                $this->colores->set("id_color",$id_color);
                $this->colores->delete();
                header("Location: " . URL . "colores" );
            }






        }


    






?>