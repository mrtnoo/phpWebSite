<?php include("cabecera.php"); ?>
<?php include("conexion.php"); ?>
<?php

if($_POST){
    print_r($_POST);
}

$objconexion = new Conexion();

$sql = ("INSERT INTO `proyectos` (`id`, `nombre`, `imagen`, `desccripcion`) VALUES (NULL, 'website', 'image.jpg', 'php + mysql')");
$objconexion->ejecutar($sql);
?>


<br/>

<div class="container">
    <div class="row">
        <div class="col-md-6">

        <div class="card">
    <div class="card-header">
        Datos del proyecto
    </div>
    <div class="card-body">

    <form action="portafolio.php" method="post" enctype="multipsrt/form-data" >

    Nombre del proyecto <input type="text" class="form-control" name="nombre" id="">
    <br/>
    Imagen del proyecto <input type="file" class="form-control" name="archivos" id="">
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
                <th scope="col">Imagen.jpg</th>
            </tr>
        </thead>
        <tbody>
            <tr class="">
                <td scope="row">1</td>
                <td>website</td>
                <td>imagee</td>
            </tr>
        </tbody>
    </table>
</div>

        </div>
        
    </div>
</div>
    

<?php include("pie.php")?>
