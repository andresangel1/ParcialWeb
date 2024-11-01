<div class="box-principal">
<h3 class="titulo">Listado de Categoria<hr></h3>
	<div class="panel panel-success">
	  <div class="panel-heading">
	    <h3 class="panel-title">Listado de categorias</h3>
	  </div>
	  <div class="panel-body">
	    <table class="table table-striped table-hover ">
		  <thead>
		    <tr>
		      <th>Nombre</th>
		      
              <th>Accion</th>
		    </tr>
		  </thead>
		  <tbody>
		  	<?php while($row = mysqli_fetch_array($datos)){ ?>
		  	<tr>
			    	<td><?php echo $row['tipo']; ?></td>
			    	<td><a class="btn btn-warning" href="<?php echo URL; ?>tipo_productos/editar/<?php echo $row['id_tipo_productos']; ?>">Editar</a>
						<a class="btn btn-danger" href="<?php echo URL; ?>tipo_productos/eliminar/<?php echo $row['id_tipo_productos']; ?>">Eliminar</a>
			    	</td>
			</tr>
			<?php } ?>
		  </tbody>
		</table> 
	  </div>
	</div>
</div>