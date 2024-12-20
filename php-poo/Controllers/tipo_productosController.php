<?php namespace Controllers;

    use Models\Tipo_producto as Tipo_producto;

    

    class tipo_productosController{
        
        private $tipo_productos;

		public function __construct(){
			$this->tipo_productos = new Tipo_producto();
		}

		public function index(){
			$datos = $this->tipo_productos->listar();
			return $datos;
		}

		public function agregar(){
			if($_POST){
				$this->tipo_productos->set("tipo", $_POST['tipo']);
				$this->tipo_productos->add();
				header('Location: '. URL . "tipo_productos");
			}
		}

		public function editar($id_tipo_productos){
			if($_POST){
				$this->tipo_productos->set("id_tipo_productos", $_POST['id_tipo_productos']);
				$this->tipo_productos->set("tipo", $_POST['tipo']);
				$this->tipo_productos->edit();
				header('Location: '. URL . "tipo_productos");
			}else{
				$this->tipo_productos->set("id_tipo_productos", $id_tipo_productos);
				$datos = $this->tipo_productos->view();
				return $datos;
			}
		}

		public function eliminar($id_tipo_productos){
			$this->tipo_productos->set("id_tipo_productos", $id_tipo_productos);
			$this->tipo_productos->delete();
			header('Location: '. URL . "tipo_productos");
		}
	}
?>