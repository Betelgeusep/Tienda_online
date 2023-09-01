<?php 
include("../../bd.php");
if($_POST){
print_r($_POST);


 // RECOLECTAR DATOS DEL METODO POST
 $CLIENTE_ID=(isset($_POST["ID_CLIENTE"])?$_POST["ID_CLIENTE"]:""); 
 $nombre=(isset($_POST["nombre"])?$_POST["nombre"]:"");
 $Apellido=(isset($_POST["Apellido"])?$_POST["Apellido"]:"");
 $telefono=(isset($_POST["telefono"])?$_POST["telefono"]:"");
 $direccion=(isset($_POST["Direccion"])?$_POST["Direccion"]:"");

 // PREPARAR LA INSERCION DE LOS DATOS
 $sentencia=$conexion->prepare("INSERT INTO cliente(cliente_id,nombre,apellido,telefono,direccion ) VALUES(:ID_CLIENTE, :nombre,:Apellido,:telefono,:Direccion)" );

 // ASIGNADO LOS VALORES QUE VIENEN DEL METODO POST DEL FROM
 $sentencia->binParam(":ID_CLIENTE",$CLIENTE_ID);
 $sentencia->binParam(":nombre",$nombre);
 $sentencia->binParam(":Apellido",$Apellido);
 $sentencia->binParam(":telefono",$telefono);
 $sentencia->binParam(":Direccion",$direccion);
 $sentencia->execute();

 header("Location:index.php");

}

?>



<?php include("../../templatess/header.php");?>
<br>
<div class="card">
    <div class="card-header">
        Datos del empleado
    </div>
    <div class="card-body">
        <form action="" method="post" enctype="multipart/form.data">

        <div class="mb-3">
          <label for="IDCLIENTE" class="form-label">ID Cliente</label>
          <input type="text"
            class="form-control" name="IDCLIENTE" id="ID CLIENTE" aria-describedby="helpId" placeholder="ID Cliente"></div>

        <div class="mb-3">
          <label for="nombre" class="form-label">Nombre</label>
          <input type="text"
            class="form-control" name="nombre" id="nombre" aria-describedby="helpId" placeholder="Nombre"></div>

            <div class="mb-3">
          <label for="Apellido" class="form-label">Apellido</label>
          <input type="text"
            class="form-control" name="Apellido" id="Apellido" aria-describedby="helpId" placeholder="Apellido"></div>


        <div class="mb-3">
          <label for="telefono" class="form-label">Telefono</label>
          <input type="text"
            class="form-control" name="telefono" id="telefono" aria-describedby="helpId" placeholder="Telefono"></div>

            <div class="mb-3">
          <label for="Dirección" class="form-label">Dirección</label>
          <input type="text"
            class="form-control" name="Direccion" id="Dirección" aria-describedby="helpId" placeholder="Direccion"></div>
        
        <button type="submit" class="btn btn-success">Agregar Registro</button>
        <a name="" id="" class="btn btn-primary" href="index.php" role="button">Cancelar</a>
           
        </form>
    </div>
    <div class="card-footer text-muted">
        
    </div>
</div>
<?php include("../../templatess/footer.php");?>