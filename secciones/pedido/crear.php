<?php include("../../templatess/header.php");?>
<br>
<div class="card">
    <div class="card-header">
        Datos del Pedido
    </div>
    <div class="card-body">
        <form action="" method="post" enctype="multipart/form.data">

        <div class="mb-3">
          <label for="IDPedido" class="form-label">ID Pedido</label>
          <input type="text"
            class="form-control" name="IDPedido" id="IDPedido" aria-describedby="helpId" placeholder="ID Pedido"></div>
        
        <div class="mb-3">
          <label for="Fecha" class="form-label">Fecha</label>
          <input type="date"
            class="form-control" name="Fecha" id="Fecha" aria-describedby="helpId" placeholder="Fecha"></div>
            
            <div class="mb-3">
          <label for="ID_Cliente" class="form-label">ID Cliente</label>
          <input type="text"
            class="form-control" name="ID_Cliente" id="ID_Cliente" aria-describedby="helpId" placeholder="ID Cliente"></div>

            <div class="mb-3">
                <label for="" class="form-label">Metodo Pago</label>
                <select class="form-select form-select-lg" name="" id="">
                    <option selected>Seleccione una opción</option>
                    <option value="">transferencia</option>
                    <option value="">tarjeta credito</option>
                    <option value="">tarjeta debito</option>
                    <option value="">PayPal</option>
                </select>
            </div>

            <div class="mb-3">
          <label for="CantidadTotal" class="form-label">Cantidad Total</label>
          <input type="text"
            class="form-control" name="CantidadTotal" id="CantidadTotal" aria-describedby="helpId" placeholder="Cantidad Total"></div>


        
        <button type="submit" class="btn btn-success">Agregar Registro</button>
        <a name="" id="" class="btn btn-primary" href="index.php" role="button">Cancelar</a>
           
        </form>
    </div>
    <div class="card-footer text-muted">
        
    </div>
</div>
<?php include("../../templatess/footer.php");?>