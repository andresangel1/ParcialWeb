<?php namespace Controllers;


    use Models\Color_has_Producto as Color_has_Producto;
    use Models\Color as Color;
    use Models\Producto as Producto;

    class colores_has_productosController{

        private $colores_has_productos;
        private $colores;
        private $productos;

        public function __construct(){
            $this->colores_has_productos = new Color_has_Producto();
            $this->colores = new Color();
            $this->productos = new Producto();
        }

        public function index(){
            $datos = $this->colores_has_productos->listar();
            return $datos;
        }

        public function agregar(){
            if(!$_POST){
                $datos = $this->producto->listar();
                return $datos;
            
            }else{
                if($_POST){
                    $this->colores_has_productos->set("colores_id_color",$_POST['colores_id_color']);
                    $this->colores_has_productos->set("productos_id_producto",$_POST['productos_id_producto']);
                    $this->colores_has_productos->add();
                    header("Location: " . URL . "colores_has_productos");

                }
            }

        

        }

        public function editar($id_colores_has_productos){
			if(!$_POST){
				$this->colores_has_productos->set("id_colores_has_productos", $id_colores_has_productos);
				$datos = $this->id_colores_has_productos->view();
				return $datos;
			}else{
				$this->colores_has_productos->set("id_colores_has_productos", $id_colores_has_productos);
				$this->colores_has_productos->set("colores_id_color",$_POST['colores_id_color']);
                $this->colores_has_productos->set("productos_id_producto",$_POST['productos_id_producto']);
				$this->colores_has_productos->edit();
				header("Location: " . URL . "colores_has_productos");
			}
		}

		public function listarProductos(){
			$datos = $this->Producto->listar();
			return $datos;
		}

		public function ver($id_colores_has_productos){
			$this->colores_has_productos->set("id_colores_has_productos",$id_colores_has_productos);
			$datos = $this->colores_has_productos->view();
			return $datos;
		}

		public function eliminar($id_colores_has_productos){
			$this->colores_has_productos->set("id_colores_has_productos",$id_colores_has_productos);
			$this->colores_has_productos->delete();
			header("Location: " . URL . "colores_has_productos");
		}





        }

    






?>