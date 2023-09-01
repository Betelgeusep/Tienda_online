<?php 
include("../../bd.php");
if($_POST){
print_r($_POST);


 // RECOLECTAR DATOS DEL METODO POST
 $id_categoria=(isset($_POST["id_categoria"])?$_POST["id_categoria"]:""); 
 $nombre_categoria=(isset($_POST["nombre_categoria"])?$_POST["nombre_categoria"]:"");
 

 // PREPARAR LA INSERCION DE LOS DATOS
 $sentencia=$conexion->prepare("INSERT INTO categoria(id_categoria,nombre_categoria) VALUES(:id_categoria, :nombre_categoria)" );

 // ASIGNADO LOS VALORES QUE VIENEN DEL METODO POST DEL FROM
 $sentencia->binParam(":id_categoria",$id_categoria);
 $sentencia->binParam(":nombre_categoria",$nombre_categoria);

 $sentencia->execute();

 header("Location:index.php");

}

?>

<?php include("../../templatess/header.php");?>
<br>
<div class="card">
    <div class="card-header">
        Datos Categoría
    </div>
    <div class="card-body">
        <form action="" method="post" enctype="multipart/form.data">

        <div class="mb-3">
          <label for="ID Categoría" class="form-label">ID Categoría</label>
          <input type="text"
            class="form-control" name="ID Categoría" id="ID Categoría" aria-describedby="helpId" placeholder="ID Categoría"></div>

            <div class="mb-3">
          <label for="Categoría" class="form-label">Categoría</label>
          <input type="text"
            class="form-control" name="Categoría" id="Categoría" aria-describedby="helpId" placeholder="Categoría"></div>


    

            
        
        <button type="submit" class="btn btn-success">Agregar Registro</button>
        <a name="" id="" class="btn btn-primary" href="index.php" role="button">Cancelar</a>
           
        </form>
    </div>
    <div class="card-footer text-muted">
        
    </div>
</div>
<?php include("../../templatess/footer.php");?>