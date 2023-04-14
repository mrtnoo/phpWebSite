<?php
session_start();
if(isset($_SESSION['usuario'])!="mrtn"){
    header("location:login.php");
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
  

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css">
    <style>
        
        #cerrar{
  display: inline-block;
  padding: 12px 24px;
  font-size: 16px;
  font-weight: 600;
  color: #fff;
  background-color: #ff6b6b;
  border: none;
  border-radius: 50px;
  box-shadow: 0 5px 15px rgba(0,0,0,0.2);
  cursor: pointer;
  transition: all 0.3s ease-in-out;
  position: absolute;
  top: 0;
  right: 10%;
  margin-top: 3px;
}

#cerrar:hover {
  transform: translateY(+5px);
  box-shadow: 0 8px 20px rgba(0,0,0,0.3);
}
#a{
  display: inline-block;
  padding: 12px 24px;
  font-size: 16px;
  font-weight: 600;
  color: #fff;
  background-color: #1a237e;
  border: none;
  border-radius: 50px;
  box-shadow: 0 5px 15px rgba(0,0,0,0.2);
  cursor: pointer;
  transition: all 0.3s ease-in-out;
  margin-top: 3px;
}

#a:hover {
  transform: translateY(+5px);
  box-shadow: 0 8px 20px rgba(0,0,0,0.3);
}
        
    
  </style>
</head>
<body>
    
<div class="container">

<a name="" id="a" class="btn btn-primary" href="index.php" role="button">Inicio</a>
<a name="" id="a" class="btn btn-primary" href="portafolio.php" role="button">Agendar</a>
<a name="" id="cerrar" class="btn btn-danger" href="cerrar.php" role="button">Cerrar</a>



     
    



