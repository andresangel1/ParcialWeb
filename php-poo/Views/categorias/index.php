<div class="box-principal">
<h3 class="titulo">Listado de Categorias<hr></h3>
	<div class="panel panel-success">
	  <div class="panel-heading">
	    <h3 class="panel-title">Listado de Categorias</h3>
	  </div>
	  <div class="panel-body">
	    <table class="table table-striped table-hover ">
		  <thead>
		    <tr>
		      <th>id</th>
		      <th>Nombre</th>
		      <th>Acción</th>
		    </tr>
		  </thead>
		  <tbody>
		  	<?php while($row = mysqli_fetch_array($datos)){ ?>
		  	<tr>
		  		<td><?php echo $row['id_tipo_productos']; ?></td>
			    <td><?php echo $row['tipo']; ?></td>
			 <td>
			 	<a class="btn btn-warning" href="<?php echo URL; ?>categorias/editar/<?php echo $row['id_tipo_productos']; ?>">Editar</a>
				<a class="btn btn-danger" href="<?php echo URL; ?>categorias/eliminar/<?php echo $row['id_tipo_productos']; ?>">Eliminar</a>
			</td>
			</tr>
			<?php } ?>
		  </tbody>
		</table> 
	  </div>
	</div>
</div>