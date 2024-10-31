<?php namespace Controllers;


    use Models\Producto_has_talles as Producto_has_talle;
    use Models\Producto as Producto;
    use Models\Producto as Talle;

    class productos_has_tallesController{

        private $productos_has_talles;
        private $productos;
        private $talles;

        public function __construct(){
            $this->productos_has_talles = new Producto_has_talle();
            $this->productos = new Producto();
            $this->talles = new Talle();
        }

        public function index(){
            $datos = $this->productos_has_talles->listar();
            return $datos;
        }

        public function agregar(){
            if(!$_POST){
                $datos = $this->producto->listar();
                return $datos;
            
            }else{
                if($_POST){
                    $this->productos_has_talles->set("fk_id_producto",$_POST['fk_id_producto']);
                    $this->productos_has_talles->set("fk_id_talle",$_POST['fk_id_talle']);
                    $this->productos_has_talles->add();
                    header("Location: " . URL . "productos_has_talles");

                }
            }

        

        }

        public function editar($id_productos_has_talles){
			if(!$_POST){
				$this->productos_has_talles->set("id_productos_has_talles", $id_productos_has_talles);
				$datos = $this->id_productos_has_talles->view();
				return $datos;
			}else{
				$this->productos_has_talles->set("id_productos_has_talles", $id_productos_has_talles);
				$this->productos_has_talles->set("fk_id_talle",$_POST['fk_id_talle']);
                $this->productos_has_talles->set("fk_id_producto",$_POST['fk_id_producto']);
				$this->productos_has_talles->edit();
				header("Location: " . URL . "productos_has_talles");
			}
		}

		public function listarProductos(){
			$datos = $this->Producto->listar();
			return $datos;
		}

		public function ver($id_productos_has_talles){
			$this->productos_has_talles->set("id_productos_has_talles",$id_productos_has_talles);
			$datos = $this->productos_has_talles->view();
			return $datos;
		}

		public function eliminar($id_productos_has_talles){
			$this->productos_has_talles->set("id_productos_has_talles",$id_productos_has_talles);
			$this->productos_has_talles->delete();
			header("Location: " . URL . "productos_has_talles");
		}





        }

    






?>