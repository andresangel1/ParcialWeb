<?php namespace Controllers;

    use Models\Usuario as Usuario;  
    use Models\Tipo_usuario as Tipo_usuario;

    class usuariosController{

        private $usuarios;
        private $nombre;
        private $mail;
        private $contrasena;
        private $tipo_usuario;
        private $rol;

        public function __construct(){
            $this->usuarios = new Usuario();
            $this->nombre = new Nombre();
            $this->mail = new Mail();
            $this->contrasena = new Contrasena();
            $this->rol = new Rol();
            
        }

        public function index(){
            $datos = $this->usuarios->listar();
            return $datos;
        }

        public function agregar(){
            if(!$_POST){
                $datos = $this->usuario->listar();
                return $datos;
            
            }else{
                    $this->usuario->set("usuario",$_POST['usuario']);
                    $this->usuario->add();
                    header("Location: " . URL . "usuario");

                }
            }

        

        }
        public function editar($id_usuario){
			if(!$_POST){
				$this->usuario->set("id_usuario", $id_usuario);
				$datos = $this->id_usario->view();
				return $datos;
			}else{
				$this->usuario->set("id_usuario", $id_usuario);
				$this->usuario->set("nombre",$_POST['nombre']);
                $this->usuario->set("mail",$_POST['mail']);
                $this->usuario->set("contrasena",$_POST['contrasena']);
                $this->usuario->set("tipo_usuario",$_POST['tipo_usuario']);
                $this->usuario->set("rol",$_POST['rol']);
				$this->usuario->edit();
				header("Location: " . URL . "usuario");
			}
		}
        
        public function listarProductos(){
			$datos = $this->Producto->listar();
			return $datos;
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