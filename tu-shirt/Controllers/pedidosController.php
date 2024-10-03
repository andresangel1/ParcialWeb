<?php namespace Controllers;

    use Models\Producto_has_talle as Producto_has_talle;
    use Models\Producto_has_diseno	 as Producto_has_diseno;
    use Models\Color_has_Producto as Color_has_Producto;
    use Models\Usuario as Usuario;
    use Models\Pedido as Pedido;


    class pedidosController{

        private $pedidos;
        private $productos_has_talle;
        private $productos_has_diseno;
        private $colores_has_productos;
        private $usuarios;
        

        public function __construct(){
            $this->pedidos = new Pedido();
            $this->productos_has_talle = new Producto_has_talle();
            $this->productos_has_diseno = new Producto_has_diseno();
            $this->colores_has_productos = new Color_has_producto();
            $this->usuarios = new Usuario();
            
        }

        public function index(){
            $datos = $this->pedidos->listar();
            return $datos;
        }

        public function agregar(){
            if(!$_POST){
                $datos = $this->producto->listar();
                return $datos;
            
            }else{
                $permitidos = array("image/jpeg","image/png","image/gif","image/jpg");
                $limite = 700;
                if(in_array($_FILES['imagen']['type'], $permitidos && $_FILES['imagen']['size'] <= $limite * 1024 )){
                    $nombre = date('is') . $_FILES['imagen']['name'];
                    $ruta = "Views" . DS . "_template" . DS . "imagenes" . DS . "avatars" . DS . $nombre;
                    move_uploaded_file($_FILES['imagen']['tmp_name'],$ruta);
                    $this->pedidos->set("fk_id_usuario",$_POST['fk_id_usuario']);
                    $this->pedidos->set("imagen",$nombre);
                    $this->pedidos->set("colores_has_productos_id_colores_has_productos",$_POST['colores_has_productos_id_colores_has_productos']);
                    $this->pedidos->set("fk_id_productos_has_tallescol",$_POST['fk_id_productos_has_tallescol']);                    
                    $this->pedidos->set("fk_id_productos_has_diseno",$_post['fk_id_productos_has_diseno']);
                    $this->pedidos->add();
                    header("Location: " . URL . "pedidos");

                }
            }

        

        }
         //editar
        public function editar($id){
			if(!$_POST){
				$this->estudiante->set("id", $id);
				$datos = $this->estudiante->view();
				return $datos;
			}else{
                $permitidos = array("image/jpeg","image/png","image/gif","image/jpg");
                $limite = 700;
                if(in_array($_FILES['imagen']['type'], $permitidos && $_FILES['imagen']['size'] <= $limite * 1024 )){
                    $nombre = date('is') . $_FILES['imagen']['name'];
                    $ruta = "Views" . DS . "_template" . DS . "imagenes" . DS . "avatars" . DS . $nombre;
                    move_uploaded_file($_FILES['imagen']['tmp_name'],$ruta);
                    $this->pedidos->set("fk_id_usuario",$_POST['fk_id_usuario']);
                    $this->pedidos->set("imagen",$nombre);
                    $this->pedidos->set("colores_has_productos_id_colores_has_productos",$_POST['colores_has_productos_id_colores_has_productos']);
                    $this->pedidos->set("fk_id_productos_has_tallescol",$_POST['fk_id_productos_has_tallescol']);                    
                    $this->pedidos->set("fk_id_productos_has_diseno",$_post['fk_id_productos_has_diseno']);
                    $this->pedidos->edit();
                    header("Location: " . URL . "pedidos");
			}
        }
		}
        
        public function listarProductos(){
			$datos = $this->Producto->listar();
			return $datos;
		}
       
		public function ver($id_pedido){
			$this->pedidos->set("id_pedido",$id_pedido);
			$datos = $this->pedidos->view();
			return $datos;
		}
        
		public function eliminar($id_pedido){
			$this->pedidos->set("id_pedido",$id_pedido);
			$this->pedidos->delete();
			header("Location: " . URL . "pedidos");
		}





        }

    






?>