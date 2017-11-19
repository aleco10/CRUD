<html>
 <head>
  <title>Prueba de PHP</title>
  <meta charset="utf-8" name="viewport" content="width=device-width, user-scalable=no">
  <link rel="stylesheet" href="css/bootstrap.min.css">
 </head>
 <body>
 <?php echo '<p>Hola Mundo</p>'; ?>
   <form action="accion.php" method="post">
     <p>Su nombre: <input type="text" name="nombre" /></p>
     <p>Su edad: <input type="text" name="edad" /></p>
     <button class="btn btn-primary">enviar</button>
  </form>
    <table class="table">
    <thead>
      <tr>
        <th>Firstname</th>
        <th>Lastname</th>
        <th>Email</th>
      </tr>
    </thead>
    <tbody>
      <tr>
        <td>Default</td>
        <td>Defaultson</td>
        <td>def@somemail.com</td>
      </tr>      
      <tr class="success">
        <td>Success</td>
        <td>Doe</td>
        <td>john@example.com</td>
      </tr>
      <tr class="danger">
        <td>Danger</td>
        <td>Moe</td>
        <td>mary@example.com</td>
      </tr>
      <tr class="info">
        <td>Info</td>
        <td>Dooley</td>
        <td>july@example.com</td>
      </tr>
      <tr class="warning">
        <td>Warning</td>
        <td>Refs</td>
        <td>bo@example.com</td>
      </tr>
      <tr class="active">
        <td>Active</td>
        <td>Activeson</td>
        <td>act@example.com</td>
      </tr>
    </tbody>
  </table>
 </body>
 <script src="js/jquery.js"></script>
 <script src="js/bootstrap.min.js"></script>
</html>