<?php
include("../../bd.php");

$sentencia=$conexion->prepare("SELECT * FROM `tienda`");
$sentencia->execute();
$lista_tienda=$sentencia->fetchAll(PDO::FETCH_ASSOC);

?>

<?php include("../../templatess/header.php");?>

<br/>
<h4>Tiendas</h4>

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
                    <th scope="col">ID TIENDA</th>
                    <th scope="col">Sucursal</th>
                    <th scope="col">Dirección</th>
                    <th scope="col">Acciones</th>
                    
                    
                </tr>
            </thead>
            <tbody>
            <?php foreach ($lista_tienda as $registro){?>
                <tr class="">
                    <td scope="row"><?php echo $registro['Tienda_id'];?></td>
                    <td><?php echo $registro['Sucursal'];?></td>
                    <td><?php echo $registro['Direccion'];?></td>
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