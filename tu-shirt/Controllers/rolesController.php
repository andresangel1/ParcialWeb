<?php namespace Controllers;

    use Models\roles as Rol;

    

    class rolesController{
        
        private $roles;

        public function __construct(){
            $this->roles = new Rol();
        }

        public function index(){
            $datos = $this->roles->listar();
            return $datos;
        }

        public function agregar(){
            if($_POST){
                $this->roles->set("rol",$_POST['rol']);
                $this->roles->add();
                header("Location: " . URL . "roles" );

            }
        

         }

            public function editar($id_rol){
                if($_POST){
                    $this->roles->set("id_rol",$_POST['id_rol']);
                    $this->roles->set("tipo",$_POST['tipo']);
                    $this->roles->edit();
                    header("Location: " . URL . "roles" );
                }else{
                    $this->roles->set("id_rol",$id_rol);
                    $datos = $this->roles->view();
                    return $datos;

                }
            }

            public function eliminar($id_rol) {
                $this->roles->set("id_rol",$id_rol);
                $this->roles->delete();
                header("Location: " . URL . "roles" );
            }






        }


    






?>