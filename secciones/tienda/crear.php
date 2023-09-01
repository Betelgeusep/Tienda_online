<?php include("../../templatess/header.php");?>
<br>
<div class="card">
    <div class="card-header">
        Datos del Producto
    </div>
    <div class="card-body">
        <form action="" method="post" enctype="multipart/form.data">

        <div class="mb-3">
          <label for="IDTienda" class="form-label">ID Tienda</label>
          <input type="text"
            class="form-control" name="IDTienda" id="IDTienda" aria-describedby="helpId" placeholder="ID Tienda"></div>
        
        <div class="mb-3">
          <label for="Sucursal" class="form-label">Sucursal</label>
          <input type="text"
            class="form-control" name="Sucursal" id="Sucursal" aria-describedby="helpId" placeholder="Sucursal"></div>

            <div class="mb-3">
          <label for="Direccion" class="form-label">Dirección</label>
          <input type="text"
            class="form-control" name="Direccion" id="Dirección" aria-describedby="helpId" placeholder="ireccionn"></div>
            
        
            

          


        
        <button type="submit" class="btn btn-success">Agregar Registro</button>
        <a name="" id="" class="btn btn-primary" href="index.php" role="button">Cancelar</a>
           
        </form>
    </div>
    <div class="card-footer text-muted">
        
    </div>
</div>
<?php include("../../templatess/footer.php");?>