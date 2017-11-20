<?php
$field_name = $_POST['nombre'];
$field_dni = $_POST['dni'];
$field_direccion = $_POST['direccion'];
$field_email = $_POST['email'];
$field_sexo = $_POST['sexo'];
$field_estudios = $_POST['estudios'];
$field_interes = $_POST['interes'];
$field_dia = $_POST['dia'];

$client = new MongoDB\Client;

$companydb = $client->registro;

$empcollection=$companydb->usuarios

$updateResult = $empcollection ->updateOne (['nombre'->$field_name,'dni'->$field_dni,'direccion'->$field_direccion,'email'->$field_email,'sexo'->$field_sexo,'estudios'->$field_estudios,'interes'->$field_interes,'dia'->$field_dia, 'estado'->0]);


?>




<html>
<head>
<title>Suscripción boletín</title> 
<meta charset="utf-8" name="viewport" content="width=device-width, user-scalable=no">
  <link rel="stylesheet" href="css/bootstrap.min.css">
<style type="text/css">
h1 { text-align: center; }
td { padding: 0.2em 2em ; }
</style>

</head>
<body style="background-color:#F5F2F2;">
<h1>Cliente Actualizado</h1>
<br/>
<br/>

<div class="row">
  <div class="col-sm-2">
    <div class="navbar-collapse collapse sidebar-navbar-collapse">
          <ul class="nav navbar-nav">
            <li><a style="color:black;" href="index.php">Listar Usuarios</a></li>
            <li class="active"><a style="color:black;" href="insertar.php">Insertar Usuarios</a></li>
            <li><a style="color:black;" href="#">Historial</a></li>
            <li><a style="color:black;" href="#">Reviews <span class="badge">1,118</span></a></li>
          </ul>
        </div>
  </div>
  <div class="col-sm-8">
</div>
</div>
</body>
</html>
