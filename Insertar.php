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
<h1>SUSCRIPCION ELECTRONICA A NUESTRO BOLETIN</h1>
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

<form class="form-inline" action="insert.php" method="post"/>

 <div class="col-sm-4">
    <label>Nombres y Apellidos:</label>
  </div>
  <div class="col-sm-8">
    <input name='nombre' type="text" class="form-control" id="nombre" size="30"/><br/>
  </div>
 
  <div class="col-sm-4">
    <label>Documento de Identificación (DNI):</label>
  </div>
  <div class="col-sm-8">  
    <input name='dni' type="text" class="form-control" id="dni" size="30"/><br/>
  </div>

  <div class="col-sm-4">
    <label>Dirección: </label>
  </div>
  <div class="col-sm-8">
    <input name='direccion' type="text" class="form-control" id="direccion" size="30"/><br/>
  </div>

  <div class="col-sm-4">
    <label>Correo Electrónico: </label>
  </div>
  <div class="col-sm-8">
    <input name='email' type="text" class="form-control" id="email" size="30"/><br/>
  </div>

  <br/>


<table>
   <tr>
   <td>
   <br/>
   Sexo<br/>
   <input type="radio" name='sexo' value="0"/> Masculino<br/>
   <input type="radio" name='sexo' value="1"/> Femenino</p>
   </td>
   <td>
   <br/>
   Nivel de estudios<br/>
   <input type="radio" name='estudios' value="elemental" checked="checked">
     Certificado escolar<br/>
   <input type="radio" name='estudios' value="basico"/> 
     Graduado Universitario <br/>
   <input type="radio" name='estudios' value="bachiller"/> 
     Bachiller - Formación Profesional <br/>
   <input type="radio" name='estudios' value="Diplomado"/> 
     Diplomado<br/>
   </td>
   <td>
   <br/>
   Interesado en los siguientes temas: <br/>

    <div class="checkbox" name='interes'>
      <label><input type="checkbox" value="Música">Música</label>
    </div><br/>
    <div class="checkbox" name='interes'>
      <label><input type="checkbox" value="Deportes">Deportes</label>
    </div><br/>
    <div class="checkbox " name='interes'
      <label><input type="checkbox" value="Libros" >Libros</label>
    </div><br/>
    <div class="checkbox " name='interes'>
      <label><input type="checkbox" value="Cine" >Cine</label>
    </div><br/>
    <div class="checkbox " name='interes'>
      <label><input type="checkbox" value="Ciencia" >Ciencia</label>
    </div><br/>

   </td>
   </tr>
</table>
<br/>



<p>Día de la semana que le interesa recibirlo:</p>
<select name="dia">
    <option> Seleccionar </option> 
    <option value="Lunes">Lunes</option> 
    <option value="Martes">Martes</option> 
    <option value="Miércoles">Miercoles</option> 
    <option value="Jueves">Jueves</option> 
    <option value="Viernes">Viernes</option> 
    <option value="Sábado">Sábado</option> 
    <option value="Domingo">Domingo</option> 
</select>
</p>
<br/>
<div>
<button type="submit" class="btn btn-primary">Insertar</button>

</form>
<button type="submit" class="btn btn-danger">Borrar todo</button>
</div>
</div>
  <div class="col-sm-3">
    
  </div>
</div>    
 </body>
 <script src="js/jquery.js"></script>
 <script src="js/bootstrap.min.js"></script>
</html>