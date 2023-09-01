<?php 

?>

<?php include("../../templatess/header.php");?>
<br>
<div class="card">
    <div class="card-header">
        Datos del Producto
    </div>
    <div class="card-body">
        <form action="" method="post" enctype="multipart/form.data">

        <div class="mb-3">
          <label for="IDProducto" class="form-label">ID Producto</label>
          <input type="text"
            class="form-control" name="IDProducto" id="IDProducto" aria-describedby="helpId" placeholder="ID Producto"></div>
        
        <div class="mb-3">
          <label for="Precio" class="form-label">Precio</label>
          <input type="text"
            class="form-control" name="Precio" id="Precio" aria-describedby="helpId" placeholder="Precio"></div>

            <div class="mb-3">
          <label for="Descripcion" class="form-label">Descripción</label>
          <input type="text"
            class="form-control" name="Descripcion" id="Descripcion" aria-describedby="helpId" placeholder="Descripción"></div>
            
            <div class="mb-3">
          <label for="IDCategoria" class="form-label">ID Categoria</label>
          <input type="text"
            class="form-control" name="IDCategoria" id="IDCategoria" aria-describedby="helpId" placeholder="ID Categoria"></div>


            <div class="mb-3">
          <label for="IDMarca" class="form-label">ID Marca</label>
          <input type="text"
            class="form-control" name="IDMarca" id="IDMarca" aria-describedby="helpId" placeholder="ID Marca"></div>
            

          


        
        <button type="submit" class="btn btn-success">Agregar Registro</button>
        <a name="" id="" class="btn btn-primary" href="index.php" role="button">Cancelar</a>
           
        </form>
    </div>
    <div class="card-footer text-muted">
        
    </div>
</div>
<?php include("../../templatess/footer.php");?>