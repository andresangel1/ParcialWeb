<?php namespace Controllers;

    use Models\Producto as Producto;
    use Models\Tipo_producto as Tipo_producto;

    

    class productosController{
        
        private $producto;
        private $tipo_producto;

        public function __construct(){
            $this->producto = new Producto();
        }

        public function index(){
            $datos = $this->producto->listar();
            return $datos;
        }


         public function agregar(){
			if(!$_POST){
				$datos = $this->tipo_producto->listar();
				return $datos;
			}else{
                $this->producto->set("nombre",$_POST['nombre']);
                $this->producto->set("fk_tipo_productos",$_POST['fk_tipo_productos']);
                $this->producto->add();
                header("Location: " . URL . "productos" );
				}
			}
		

        public function editar($id_producto){
			if(!$_POST){
				$this->producto->set("id_producto", $id_producto);
				$datos = $this->producto->view();
				return $datos;
			}else{
				$this->producto->set("id_producto",$_POST['id_producto']);
                    $this->producto->set("nombre",$_POST['nombre']);
                    $this->producto->set("fk_tipo_productos",$_POST['fk_tipo_productos']);
                    $this->producto->edit();
                    header("Location: " . URL . "productos" );
			}
		}

        public function listarTipo_productos(){
			$datos = $this->tipo_producto->listar();
			return $datos;
		}

            public function eliminar($id_producto) {
                $this->producto->set("id_producto",$id_producto);
                $this->producto->delete();
                header("Location: " . URL . "productos" );
            }






        }
        $productos = new productosController();


    






?>