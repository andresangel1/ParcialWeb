<?php namespace Controllers;


    use Models\productos_has_diseno as productos_has_diseno;
    use Models\productos as Producto;
    use Models\disenos as Diseno;

    class productos_has_disenoController{

        private $id_productos_has_diseno;
        private $fk_producto;
        private $fk_diseno;

        public function __construct(){
            $this->productos_has_diseno = new Producto_has_Diseno();
            $this->productos = new Producto();
            $this->disenos = new Diseno();
        }

        public function index(){
            $datos = $this->productos_has_diseno->listar();
            return $datos;
        }

        public function agregar(){
            if(!$_POST){
                $datos = $this->producto->listar();
                return $datos;
            
            }else{
                if($_POST){
                    $this->productos_has_diseno->set("fk_producto",$_POST['fk_producto']);
                    $this->productos_has_diseno->set("fk_diseno",$_POST['fk_diseno']);
                    $this->productos_has_diseno->add();
                    header("Location: " . URL . "productos_has_diseno");

                }
            }

        

        }

        public function editar($id_productos_has_diseno){
			if(!$_POST){
				$this->productos_has_diseno->set("id_productos_has_diseno", $id_productos_has_diseno);
				$datos = $this->id_productos_has_diseno->view();
				return $datos;
			}else{
				$this->productos_has_diseno->set("id_productos_has_diseno", $id_productos_has_diseno);
				$this->productos_has_diseno->set("fk_producto",$_POST['fk_producto']);
                $this->productos_has_diseno->set("fk_diseno",$_POST['fk_diseno']);
				$this->productos_has_diseno->edit();
				header("Location: " . URL . "productos_has_diseno");
			}
		}

		public function listarProductos(){
			$datos = $this->Producto->listar();
			return $datos;
		}

		public function ver($id_productos_has_diseno){
			$this->productos_has_diseno->set("id_productos_has_diseno",$id_productos_has_diseno);
			$datos = $this->productos_has_diseno->view();
			return $datos;
		}

		public function eliminar($id_productos_has_diseno){
			$this->productos_has_diseno->set("id_productos_has_diseno",$id_productos_has_diseno);
			$this->productos_has_diseno->delete();
			header("Location: " . URL . "productos_has_diseno");
		}





        }

    






?>