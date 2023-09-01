<?php
include("../../bd.php");

if(isset($_GET['txtID'])){
    $txtID=(isset($_GET['txtID']))?$_GET['txtID']:"";
    $sentencia=$conexion->prepare("INSERT INTO cliente(cliente_id,nombre,apellido,telefono,direccion) VALUES (cliente_id,nombre,apellido,telefono,direccion)");
}

$sentencia=$conexion->prepare("SELECT * FROM `Cliente`");
$sentencia->execute();
$lista_cliente=$sentencia->fetchAll(PDO::FETCH_ASSOC);

?>

<?php include("../../templatess/header.php");?>

<br/>
<h4>Empleados</h4>

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
                    <th scope="col">Cliente ID</th>
                    <th scope="col">Nombre</th>
                    <th scope="col">Apellido</th>
                    <th scope="col">Telefono</th>
                    <th scope="col">Direccion</th>
                    <th scope="col">Acciones</th>
                    
                    
                </tr>
            </thead>
            <tbody>
                <?php foreach ($lista_cliente as $registro){?>
                    <tr class="">
                    <td scope="row"><?php echo $registro['cliente_id'];?></td>
                    <td><?php echo $registro['nombre'];?></td>
                    <td><?php echo $registro['apellido'];?></td>
                    <td><?php echo $registro['telefono'];?></td>
                    <td><?php echo $registro['direccion'];?></td>
                    <td>
                        <a class="btn btn-info" href="#" role="button">Editar</a>
                        <a class="btn btn-danger" href="index.php?txtID=<?php echo $registro['cliente_id'];?> " role="button">Eliminar</a>
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