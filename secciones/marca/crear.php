<?php include("../../templatess/header.php");?>
<br>
<div class="card">
    <div class="card-header">
        Datos de la Marca
    </div>
    <div class="card-body">
        <form action="" method="post" enctype="multipart/form.data">

        <div class="mb-3">
          <label for="IDMarca" class="form-label">ID Marca</label>
          <input type="text"
            class="form-control" name="IDMarca" id="IDMarca" aria-describedby="helpId" placeholder="ID Marca"></div>

        <div class="mb-3">
          <label for="Marca" class="form-label">Marca</label>
          <input type="text"
            class="form-control" name="Marca" id="Marca" aria-describedby="helpId" placeholder="Marca"></div>

          
        
        <button type="submit" class="btn btn-success">Agregar Registro</button>
        <a name="" id="" class="btn btn-primary" href="index.php" role="button">Cancelar</a>
           
        </form>
    </div>
    <div class="card-footer text-muted">
        
    </div>
</div>
<?php include("../../templatess/footer.php");?>