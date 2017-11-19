<html>
 <head>
  <title>Prueba de PHP</title>
  <meta charset="utf-8" name="viewport" content="width=device-width, user-scalable=no">
  <link rel="stylesheet" href="css/bootstrap.min.css">
  <style type="text/css">
    h1{text-align: center;}

  </style>
 </head>
 <body>
<h1>USUARIOS WEB</h1>
 <div class="row">
  <div class="col-sm-2">
    <div class="navbar-collapse collapse sidebar-navbar-collapse">
          <ul class="nav navbar-nav">
            <li class="active"><a href="index.php">Listar Usuarios</a></li>
            <li><a href="insertar.php">Insertar Usuarios</a></li>
            <li><a href="#">Historial</a></li>
            <li><a href="#">Reviews <span class="badge">1,118</span></a></li>
          </ul>
        </div>
  </div>
  <div class="col-sm-8">
    <table class="table table-striped">
    <thead>
      <tr>
        <th>Firstname</th>
        <th>Lastname</th>
        <th>Email</th>
        <th></th>
      </tr>
    </thead>
    <tbody>
      <tr>
        <td>Default</td>
        <td>Defaultson</td>
        <td>def@somemail.com</td>
        <td><div class="dropdown">
  <button class="btn btn-primary dropdown-toggle" type="button" data-toggle="dropdown">
  <span class="caret"></span></button>
  <ul class="dropdown-menu">
    <li><a href="Actualizar.php">Editar</a></li>
    <li><a href="#">Eliminar</a></li>
    <li><a href="#">Detalle</a></li>
  </ul>
</div></td>
      </tr>      
      <tr >
        <td>Success</td>
        <td>Doe</td>
        <td>john@example.com</td>
        <td><div class="dropdown">
  <button class="btn btn-primary dropdown-toggle" type="button" data-toggle="dropdown">
  <span class="caret"></span></button>
  <ul class="dropdown-menu">
    <li><a href="Actualizar.php">Editar</a></li>
    <li><a href="#">Eliminar</a></li>
    <li><a href="#">Detalle</a></li>
  </ul>
</div></td>
      </tr>
      <tr >
        <td>Danger</td>
        <td>Moe</td>
        <td>mary@example.com</td>
        <td><div class="dropdown">
  <button class="btn btn-primary dropdown-toggle" type="button" data-toggle="dropdown">
  <span class="caret"></span></button>
  <ul class="dropdown-menu">
    <li><a href="Actualizar.php">Editar</a></li>
    <li><a href="#">Eliminar</a></li>
    <li><a href="#">Detalle</a></li>
  </ul>
</div></td>
      </tr>
      <tr >
        <td>Info</td>
        <td>Dooley</td>
        <td>july@example.com</td>
        <td><div class="dropdown">
  <button class="btn btn-primary dropdown-toggle" type="button" data-toggle="dropdown">
  <span class="caret"></span></button>
  <ul class="dropdown-menu">
    <li><a href="Actualizar.php">Editar</a></li>
    <li><a href="#">Eliminar</a></li>
    <li><a href="#">Detalle</a></li>
  </ul>
</div></td>
      </tr>
      <tr >
        <td>Warning</td>
        <td>Refs</td>
        <td>bo@example.com</td>
        <td><div class="dropdown">
  <button class="btn btn-primary dropdown-toggle" type="button" data-toggle="dropdown">
  <span class="caret"></span></button>
  <ul class="dropdown-menu">
    <li><a href="Actualizar.php">Editar</a></li>
    <li><a href="#">Eliminar</a></li>
    <li><a href="#">Detalle</a></li>
  </ul>
</div></td>
      </tr>
      <tr >
        <td>Active</td>
        <td>Activeson</td>
        <td>act@example.com</td>
        <td><div class="dropdown">
  <button class="btn btn-primary dropdown-toggle" type="button" data-toggle="dropdown">
  <span class="caret"></span></button>
  <ul class="dropdown-menu">
    <li><a href="Actualizar.php">Editar</a></li>
    <li><a href="#">Eliminar</a></li>
    <li><a href="#">Detalle</a></li>
  </ul>
</div></td>
      </tr>
    </tbody>
  </table>
  </div>
  <div class="col-sm-3">
    
  </div>
</div>    
 </body>
 <script src="js/jquery.js"></script>
 <script src="js/bootstrap.min.js"></script>
</html>