<?php namespace Views;

	$template = new Template();

	class Template{

		public function __construct(){
?>
	<!DOCTYPE html>
	<html lang="es">
	<head>
		<meta charset="UTF-8">
		<title>Tu-Shirt</title>
		<link rel="stylesheet" href="<?php echo URL; ?>Views/_template/css/bootstrap.css">
		<link rel="stylesheet" href="<?php echo URL; ?>Views/_template/css/general.css">
	</head>
	<body>
		<nav class="navbar navbar-inverse navbar-fixed-top" id=nav>
  		<div class="container-fluid">
		    <div class="navbar-header">
		      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-2">
		        <span class="sr-only"></span>
		        <span class="icon-bar"></span>
		        <span class="icon-bar"></span>
		        <span class="icon-bar"></span>
		      </button>
		      <a class="navbar-brand" href="<?php echo URL; ?>">Tu-Shirt</a>
		    </div>

		    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-2">
		      <ul class="nav navbar-nav">
		        <li ><a class="in" href="<?php echo URL; ?>">Inicio</a></li>
		        <li class="dropdown">
		          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">Productos <span class="caret"></span></a>
		          <ul class="dropdown-menu" role="menu">
		            <li><a href="<?php echo URL; ?>productos">Listado</a></li>
		            <li><a href="<?php echo URL; ?>productos/agregar">Agregar</a></li>
		          </ul>
		        </li>
		        <li class="dropdown">
		          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">Categorias <span class="caret"></span></a>
		          <ul class="dropdown-menu" role="menu">
		            <li><a href="<?php echo URL; ?>tipo_productos">Listado</a></li>
		            <li><a href="<?php echo URL; ?>tipo_productos/agregar">Agregar</a></li>
		          </ul>
		        </li>
		      </ul>
		      
		      <ul class="nav navbar-nav navbar-right">
		       </div>
		  </div>
		</nav>
<?php
		}

		public function __destruct(){
?>
	<footer class="navbar-fixed-bottom">
		<p id=p>Tu-Shirt Ropa con Estilo</p>
	</footer>
	<script src="//code.jquery.com/jquery-1.11.3.min.js"></script>
	<script src="<?php echo URL; ?>Views/_template/js/bootstrap.js"></script>
	</body>
	</html>
<?php
		}

	}

?>