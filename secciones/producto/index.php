<?php
include("../../bd.php");

$sentencia=$conexion->prepare("SELECT * FROM `producto`");
$sentencia->execute();
$lista_producto=$sentencia->fetchAll(PDO::FETCH_ASSOC);

?>

<?php include("../../templatess/header.php");?>

<br/>
<h4>Productos</h4>

<div class="card">
    <div class="card-header">
       

       <a name="" id="" class="btn btn-primary" 
       href="crear.php" role="button">
       Agregar Registro
       </a>

    </div>
    <div class="card-body">

    <div class="table-responsive-sm">
        <table class="table ">
            <thead>
                <tr>
                    <th scope="col">ID Producto</th>
                    <th scope="col">Precio</th>
                    <th scope="col">Descripcion</th>
                    <th scope="col">ID Categoría</th>
                    <th scope="col">ID Marca</th>
                    <th scope="col">Acciones</th>
                    
                    
                </tr>
            </thead>
            <tbody>
            <?php foreach ($lista_producto as $registro){?>
                <tr class="">
                    <td scope="row"><?php echo $registro['id_producto'];?></td>
                    <td><?php echo $registro['precio'];?></td>
                    <td><?php echo $registro['descripcion'];?></td>
                    <td><?php echo $registro['id_categoria'];?></td>
                    <td><?php echo $registro['id_marca'];?></td>
                    <td>
                        <a name="" id="" class="btn btn-info" href="#" role="button">Editar</a>
                        <a name="" id="" class="btn btn-danger" href="#" role="button">Eliminar</a>
                    </td>
                </tr>
                <?php } ?>
            </tbody>
        </table>
    </div>
    
    </div>

    <div class="card-footer text-muted">
       
    </div>

</div>

<?php include("../../templatess/footer.php");?>