<?php include("../../templatess/header.php");?>
<br>
<div class="card">
    <div class="card-header">
        Datos del pedido detallado
    </div>
    <div class="card-body">
        <form action="" method="post" enctype="multipart/form.data">

        <div class="mb-3">
          <label for="ID_detallePedido" class="form-label">ID Detalle Pedido</label>
          <input type="text"
            class="form-control" name="ID_detallePedido" id="ID_detallePedido" aria-describedby="helpId" placeholder="ID Detalle Pedido"></div>

        <div class="mb-3">
          <label for="Precio" class="form-label">Precio</label>
          <input type="text"
            class="form-control" name="Precio" id="Precio" aria-describedby="helpId" placeholder="Precio"></div>

            <div class="mb-3">
          <label for="Cantidad" class="form-label">Cantidad</label>
          <input type="text"
            class="form-control" name="Cantidad" id="Cantidad" aria-describedby="helpId" placeholder="Cantidad"></div>


        <div class="mb-3">
          <label for="Descuento" class="form-label">Descuento</label>
          <input type="text"
            class="form-control" name="Descuento" id="Descuento" aria-describedby="helpId" placeholder="Descuento"></div>

            <div class="mb-3">
          <label for="ID_Pedido" class="form-label">ID Pedido</label>
          <input type="text"
            class="form-control" name="ID_Pedido" id="ID_Pedido" aria-describedby="helpId" placeholder="ID Pedido"></div>


            <div class="mb-3">
          <label for="ID_Producto" class="form-label">ID Producto</label>
          <input type="text"
            class="form-control" name="ID_Producto" id="ID_Producto" aria-describedby="helpId" placeholder="ID Producto"></div>
        
        <button type="submit" class="btn btn-success">Agregar Registro</button>
        <a name="" id="" class="btn btn-primary" href="index.php" role="button">Cancelar</a>
           
        </form>
    </div>
    <div class="card-footer text-muted">
        
    </div>
</div>
<?php include("../../templatess/footer.php");?>