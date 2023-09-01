<?php
include("../../bd.php");

$sentencia=$conexion->prepare("SELECT * FROM `stock`");
$sentencia->execute();
$lista_stock=$sentencia->fetchAll(PDO::FETCH_ASSOC);

?>

<?php include("../../templatess/header.php");?>

<br/>
<h4>Stock</h4>

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
                    <th scope="col">ID Stock</th>
                    <th scope="col">Cantidad</th>
                    <th scope="col">ID Tienda</th>
                    <th scope="col">ID Producto</th>
                    <th scope="col">Acciones</th>
                    
                    
                </tr>
            </thead>
            <tbody>
            <?php foreach ($lista_stock as $registro){?>
                <tr class="">
                    <td scope="row"><?php echo $registro['idSTOCK'];?></td>
                    <td><?php echo $registro['cantidad_stock'];?></td>
                    <td><?php echo $registro['Tienda_id'];?></td>
                    <td><?php echo $registro['id_producto'];?></td>
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