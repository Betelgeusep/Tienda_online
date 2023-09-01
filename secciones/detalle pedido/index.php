<?php
include("../../bd.php");

$sentencia=$conexion->prepare("SELECT * FROM `detalle_pedido`");
$sentencia->execute();
$lista_detalle_pedido=$sentencia->fetchAll(PDO::FETCH_ASSOC);

?>

<?php include("../../templatess/header.php");?>

<br/>
<h4>Detalle Pedido</h4>

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
                    <th scope="col">ID DETALLE PEDIDO</th>
                    <th scope="col">Precio</th>
                    <th scope="col">Cantidad</th>
                    <th scope="col">Descuento</th>
                    <th scope="col">ID PEDIDO</th>
                    <th scope="col">ID PRODUCTO</th>
                    <th scope="col">Acciones</th>
                    
                    
                </tr>
            </thead>
            <tbody>
            <?php foreach ($lista_detalle_pedido as $registro){?>
                <tr class="">
                    <td scope="row"><?php echo $registro['idDETALLE_PEDIDO'];?></td>
                    <td><?php echo $registro['precio'];?></td>
                    <td><?php echo $registro['cantidad'];?></td>
                    <td><?php echo $registro['descuento'];?></td>
                    <td><?php echo $registro['idPEDIDO'];?></td>
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