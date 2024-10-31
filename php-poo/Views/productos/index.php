<div class="box-principal">
<h3 class="titulo">Listado de Productos<hr></h3>
	<div class="panel panel-success">
	  <div class="panel-heading">
	    <h3 class="panel-title">Listado de productos</h3>
	  </div>
	  <div class="panel-body">
	    <table class="table table-striped table-hover ">
		  <thead>
		    <tr>
		      <th>Nombre</th>
		      <th>Categoria</th>
              <th>Accion</th>
		    </tr>
		  </thead>
		  <tbody>
		  	<?php while($row = mysqli_fetch_array($datos)){ ?>
		  	<tr>
					<td><a href="<?php echo URL; ?>productos/ver/<?php echo $row['id_producto']; ?>"><?php echo $row['nombre']; ?></a></td>>
			    	<td><?php echo $row['fk_tipo_productos']; ?></td>
			    	<td><a class="btn btn-warning" href="<?php echo URL; ?>productos/editar/<?php echo $row['id_producto']; ?>">Editar</a>
						<a class="btn btn-danger" href="<?php echo URL; ?>productos/eliminar/<?php echo $row['id_producto']; ?>">Eliminar</a>
			    	</td>
			</tr>
			<?php } ?>
		  </tbody>
		</table> 
	  </div>
	</div>
</div>