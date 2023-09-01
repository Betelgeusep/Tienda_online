<?php
include("../../bd.php");

$sentencia=$conexion->prepare("SELECT * FROM `pedido`");
$sentencia->execute();
$lista_pedido=$sentencia->fetchAll(PDO::FETCH_ASSOC);

?>

<?php include("../../templatess/header.php");?>

<br/>
<h4>Pedidos</h4>

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
                    <th scope="col">ID Pedido</th>
                    <th scope="col">Fecha</th>
                    <th scope="col">ID Cliente</th>
                    <th scope="col">Metodo Pago</th>
                    <th scope="col">Cantidad Total</th>
                    <th scope="col">Acciones</th>
                    
                    
                </tr>
            </thead>
            <tbody>

            <?php foreach ($lista_pedido as $registro){?>
                <tr class="">
                    <td scope="row"><?php echo $registro['idPEDIDO'];?></td>
                    <td><?php echo $registro['Fecha'];?></td>
                    <td><?php echo $registro['cliente_id'];?></td>
                    <td><?php echo $registro['metodo_pago'];?></td>
                    <td><?php echo $registro['cantidad_total'];?></td>
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