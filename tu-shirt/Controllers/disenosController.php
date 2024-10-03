<?php namespace Controllers;

    use Models\Diseno as Diseno;

    

    class disenosController{
        
        private $disenos;

        public function __construct(){
            $this->disenos = new Color();
        }

        public function index(){
            $datos = $this->disenos->listar();
            return $datos;
        }

        public function agregar(){
            if($_POST){
                $this->disenos->set("diseno",$_POST['diseno']);
                $this->disenos->add();
                header("Location: " . URL . "disenos" );

            }
        

         }

            public function editar($id_diseno){
                if($_POST){
                    $this->disenos->set("id_diseno",$_POST['id_diseno']);
                    $this->disenos->set("diseno",$_POST['diseno']);
                    $this->disenos->edit();
                    header("Location: " . URL . "disenos" );
                }else{
                    $this->disenos->set("id_diseno",$id_diseno);
                    $datos = $this->disenos->view();
                    return $datos;

                }
            }

            public function eliminar($id_diseno) {
                $this->disenos->set("id_diseno",$id_diseno);
                $this->disenos->delete();
                header("Location: " . URL . "disenos" );
            }






        }


    






?>