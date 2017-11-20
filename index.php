<html>
 <head>
  <title>Prueba de PHP</title>
  <meta charset="utf-8" name="viewport" content="width=device-width, user-scalable=no">
  <link rel="stylesheet" href="css/bootstrap.min.css">
  <style type="text/css">
    h1{text-align: center;}

  </style>
 </head>
 <body style="background-color:#F5F2F2;">
<h1>USUARIOS WEB</h1>
 <div class="row">
  <div class="col-sm-2">
    <div class="navbar-collapse collapse sidebar-navbar-collapse">
          <ul class="nav navbar-nav">
            <li class="active"><a style="color:black;" href="index.php">Listar Usuarios</a></li>
            <li><a style="color:black;" href="insertar.php">Insertar Usuarios</a></li>
            <li><a style="color:black;" href="Construccion.php">Historial</a></li>
            <li><a style="color:black;" href="Construccion.php">Reviews <span class="badge">1,118</span></a></li>
          </ul>
        </div>
  </div>
  <div class="col-sm-8">
    <?
    $client = new MongoDB\Client;

$companydb = $client->registro;

$empcollection=$companydb->usuarios?>
<form method="post">
<table class="table table-striped">
    <thead>
      <tr>
        <th>Firstname</th>
        <th>Email</th>
        <th>DNI</th>
        <th>Direccion</th>
        <th>Dia</th>
        <th></th>
      </tr>
    </thead>
    <tbody>

<?

if($empcollection ->count()>0){
  $row = $empcollection->find(['estado':1]);
  foreach ($row as $key ) { ?>
    <tr>
        <td name="nombre"><?echo $key["nombre"]?></td>
        <td name="email"><?echo $key["email"]?></td>
        <td name="dni"><?echo $key["dni"]?></td>
        <td name="direccion"><?echo $key["direccion"]?></td>
        <td name="dia"><?echo $key["dia"]?></td>
        <td><div class="dropdown">
  <button class="btn btn-primary dropdown-toggle" type="button" data-toggle="dropdown">
  <span class="caret"></span></button>
  <ul class="dropdown-menu">
    <li><a href="Actualizar.php">Editar</a></li>
    <li><a href="eliminar.php">Eliminar</a></li>
    <li><a href="Construccion.php">Detalle</a></li>
  </ul>
</div></td>
      </tr> 
  <?}
}
    ?>
    </tbody>
  </table>
</form>
  </div>
    
  <div class="col-sm-3">
    
  </div>
</div>    
 </body>
 <script src="js/jquery.js"></script>
 <script src="js/bootstrap.min.js"></script>
</html>