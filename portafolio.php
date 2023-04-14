<?php include("cabecera.php"); ?>
<?php include("conexion.php"); ?>
<?php

if($_POST){
    $nombre = $_POST['nombre'];
    $desciption = $_POST['descripcion'];
    $fecha= new DateTime();

    $imagen = $fecha->getTimestamp()."_".$_FILES['archivo']['name'];

    $imagen_temporal=$_FILES['archivo']['tmp_name'];

    move_uploaded_file($imagen_temporal,"img/".$imagen);

    $objconexion = new Conexion();
    $sql = ("INSERT INTO `proyectos` (`id`, `nombre`, `imagen`, `desccripcion`) VALUES (NULL, '$nombre', '$imagen', '$desciption')");
    $objconexion->ejecutar($sql);
}

if($_GET){

    $id = $_GET['borrar'];
    $objconexion = new conexion();
    $sql= ("DELETE FROM proyectos WHERE `proyectos`.`id` = ".$id);
    $objconexion->ejecutar($sql);
}

$objconexion = new Conexion();
$proyectos = $objconexion->consultar("select * from proyectos");

?>


<br/>
<hr>
<div class="container">
    <div class="row">
        <div class="col-md-6">

        <div class="card">
    <div class="card-header">
        Datos del proyecto
    </div>
    <div class="card-body">

    <form action="portafolio.php" method="post" enctype="multipart/form-data" >

    Nombre del proyecto <input type="text" class="form-control" name="nombre" id="">
    <br/>
    desccripcion <textarea type="text" class="form-control" name="descripcion" id=""></textarea>
    <br/>
    Imagen del proyecto <input type="file" class="form-control" name="archivo">
    <hr>
    <input type="submit" class="btn btn-success" value="Enviar proyecto" >
    
    </form>


    </div>
</div>
            
        </div>
        <div class="col-md-6">
            

        <div class="table-responsive">
    <table class="table table-light">
        <thead>
            <tr>
                <th scope="col">ID</th>
                <th scope="col">Nombre</th>
                <th scope="col">Descripcion</th>
                <th scope="col">Imagen</th>
                <th scope="col">Acciones</th>
                
            </tr>
        </thead>
        <tbody>
            <?php foreach($proyectos as $proyecto) { ?>
            <tr>
                <td><?php echo $proyecto['id']; ?></td>
                <td><?php echo $proyecto['nombre']; ?></td>
                <td><?php echo $proyecto['desccripcion']; ?></td>
                <td><?php echo $proyecto['imagen']; ?></td>
                <td> <a class="btn btn-danger" href="?borrar=<?php echo $proyecto['id']; ?>" role="button">Eliminar</a> </td>
            </tr>
            <?php }?>
        </tbody>
    </table>
</div>

        </div>
        
    </div>
</div>
    

<?php include("pie.php")?>
