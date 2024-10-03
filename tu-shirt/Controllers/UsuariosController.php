<?php namespace Controllers;

    use Models\Usuario as Usuario;  
    use Models\Tipo_usuario as Tipo_usuario;
    use Models\Rol as Rol;

    class usuariosController{

        private $usuarios;
        private $tipo_usuario;
        private $roles;

        public function __construct(){
            $this->usuarios = new Usuario();
            $this->tipo_usuario = new Tipo_usuario();
            $this->roles = new Rol();
            
        }

        public function index(){
            $datos = $this->usuarios->listar();
            return $datos;
        }

        public function agregar(){
            if(!$_POST){
                $datos = $this->usuarios->listar();
                return $datos;
            
            }else{
                    $this->usuarios->set("nombre",$_POST['nombre']);
                    $this->usuarios->set("mail",$_POST['mail']);
                    $this->usuarios->set("contrasena",$_POST['contrasena']);                    
                    $this->usuarios->set("fk_tipo_usuario",$_post['fk_tipo_usuario']);
                    $this->usuarios->set("fk_rol",$_POST['fk_rol']);
                    $this->usuarios->add();
                    header("Location: " . URL . "usuarios");

                }
            }

        

        }
        public function editar($id_usuario){
			if(!$_POST){
				$this->usuarios->set("id_usuario", $id_usuario);
				$datos = $this->usuarios->view();
				return $datos;
			}else{
				$this->usuarios->set("id_usuario", $_POST['id_usuario']);
				$this->usuarios->set("nombre",$_POST['nombre']);
                $this->usuarios->set("mail",$_POST['mail']);
                $this->usuarios->set("contrasena",$_POST['contrasena']);
                $this->usuarios->set("fk_tipo_usuario",$_POST['fk_tipo_usuario']);
                $this->usuarios->set("fk_rol",$_POST['fk_rol']);
				$this->usuarios->edit();
				header("Location: " . URL . "usuarios");
			}
		}
       
		public function ver($id_usuario){
			$this->usuarios->set("id_usuario",$id_usuario);
			$datos = $this->usuarios->view();
			return $datos;
		}
        
		public function eliminar($id_usuario){
			$this->usuarios->set("id_usuario",$id_usuario);
			$this->usuarios->delete();
			header("Location: " . URL . "usuarios");
		}
        
?>