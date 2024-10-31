<div class="box-principal">
<h3 class="titulo">Agregar Productos<hr></h3>
	<div class="panel panel-success">
	  <div class="panel-heading">
	    <h3 class="panel-title">Agregar un nuevo producto</h3>
	  </div>
	  <div class="panel-body">
	  	<div class="row">
	  		<div class="col-md-1"></div>
	  		<div class="col-md-10">
	  			<form class="form-horizontal" action="" method="POST" enctype="multipart/form-data">
				    <div class="form-group">
				      <label for="nombre" class="control-label">Nombre del producto</label>
				        <input class="form-control" name="nombre" type="text" required>
				    </div>
				    <div class="form-group">
				      <label for="id_tipo_productos" class="control-label">Categoria</label>
				      <select name="id_tipo_productos" class="form-control">
				      	<?php while($row = mysqli_fetch_array($datos)){ ?>
				      		<option value="<?php echo $row['id_tipo_productos']; ?>"><?php echo $row['tipo']; ?></option>
				      	<?php } ?>
				      </select>
				    </div>
				    <div class="form-group">
				    	 <button type="submit" class="btn btn-success">Agregar</button>
				        <button type="reset" class="btn btn-warning">Borrar</button>
				    </div>
				</form>
	  		</div>
	  		<div class="col-md-1"></div>
	  	</div>
	  </div>
	</div>
</div>