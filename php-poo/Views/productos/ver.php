<div class="box-principal">
<h3 class="titulo">Producto <?php echo $datos['nombre']; ?><hr></h3>
  <div class="panel panel-success">
    <div class="panel-heading">
      <h3 class="panel-title">Producto <?php echo $datos['nombre']; ?><b></b></h3>
    </div>
    <div class="panel-body">
      <div class="row">
        <div class="col-md-9">
          <ul class="list-group">
            <li class="list-group-item">
              <b>Nombre: </b><?php echo $datos['nombre']; ?>
            <li class="list-group-item">
              <b>Categoria: </b><?php echo $datos['fk_tipo_productos']; ?>
            </li>
          </ul>
        </div>
      </div>
    </div>
  </div>
</div>