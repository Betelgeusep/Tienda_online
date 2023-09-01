<?php include("../../templatess/header.php");?>
<br>
<div class="card">
    <div class="card-header">
        Datos de Stock
    </div>
    <div class="card-body">
        <form action="" method="post" enctype="multipart/form.data">

        <div class="mb-3">
          <label for="IDStock" class="form-label">ID Stock</label>
          <input type="text"
            class="form-control" name="IDStock" id="IDStock" aria-describedby="helpId" placeholder="ID Stock"></div>
        
        <div class="mb-3">
          <label for="Cantidad" class="form-label">Cantidad</label>
          <input type="text"
            class="form-control" name="Cantidad" id="Cantidad" aria-describedby="helpId" placeholder="Cantidad"></div>

            <div class="mb-3">
          <label for="IDTienda" class="form-label">ID Tienda</label>
          <input type="text"
            class="form-control" name="IDTienda" id="IDTienda" aria-describedby="helpId" placeholder="ID Tienda"></div>


            <div class="mb-3">
          <label for="IDProducto" class="form-label">ID Producto</label>
          <input type="text"
            class="form-control" name="IDProducto" id="IDProducto" aria-describedby="helpId" placeholder="ID Producto"></div>
            

          


        
        <button type="submit" class="btn btn-success">Agregar Registro</button>
        <a name="" id="" class="btn btn-primary" href="index.php" role="button">Cancelar</a>
           
        </form>
    </div>
    <div class="card-footer text-muted">
        
    </div>
</div>
<?php include("../../templatess/footer.php");?>