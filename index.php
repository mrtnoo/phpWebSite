<?php include("cabecera.php"); ?>
<?php include ("conexion.php")?>
<?php
$objConecion = new Conexion();
$proyectos=$objConecion->consultar("select * from `proyectos`");
?>
<hr>
<div class="p-5 mb-4 bg-light rounded-3">
    <div class="container-fluid py-5">
      <h1 class="display-5 fw-bold">Web site</h1>
      <hr/>
      <p class="col-md-8 fs-4">Proyecto con php y MySqle</p>
    </div>
  </div>
  
  <div class="row row-cols-1 row-cols-md-3 g-4">
  <?php foreach($proyectos as $proyecto){?>


  <div class="col">
    <div class="card h-100">
      <img src="img/<?php echo $proyecto['imagen']; ?>" class="card-img-top" alt="...">
      <div class="card-body">
        <h5 class="card-title"><?php echo $proyecto['nombre']; ?></h5>
        <p class="card-text"><?php echo $proyecto['desccripcion']; ?></p>
      </div>
    </div>
  </div>
  
<?php } ?>
</div>
<?php include("pie.php")?>