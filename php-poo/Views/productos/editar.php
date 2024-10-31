<?php $productos->listar(); ?>
<div class="box-principal">
<h3 class="titulo">Editar producto <?php echo $datos['nombre']; ?><hr></h3>
	<div class="panel panel-success">
	  <div class="panel-heading">
	    <h3 class="panel-title">Editar producto <?php echo $datos['nombre']; ?></h3>
	  </div>
	  <div class="panel-body">
	  		<div class="col-md-9">
	  			<form class="form-horizontal" action="" method="POST" enctype="multipart/form-data">
				    <div class="form-group">
				      <label for="inputEmail" class="control-label">Nombre del producto</label>
				        <input class="form-control" value="<?php echo $datos['nombre']; ?>" name="nombre" type="text" required>
				    </div>
				    <div class="form-group">
				      <label for="inputEmail" class="control-label">Categoria (<b>Categoria Actual: <?php echo $datos['fk_tipo_productos']; ?></b>)</label>
				      <select name="id_tipo_productos" class="form-control">
				      	<?php while($row = mysqli_fetch_array($tipo_productos)){ ?>
				      		<option value="<?php echo $row['id_tipo_productos']; ?>"><?php echo $row['tipo']; ?></option>
				      	<?php } ?>
				      </select>
				    </div>
				    <input value="<?php echo $datos['id_producto']; ?>" name="id" type="hidden" required>
				    <div class="form-group">
				    	 <button type="submit" class="btn btn-success">Editar</button>
				        <button type="reset" class="btn btn-warning">Borrar</button>
				    </div>
				</form>
	  		</div>
	  	</div>
	  </div>
	</div>
</div>