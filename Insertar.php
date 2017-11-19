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
<body>
<h1>SUSCRIPCIÓN ELECTRÓNICA A NUESTRO BOLETIN</h1>
<br/>

<div class="row">
  <div class="col-sm-2">
    <div class="navbar-collapse collapse sidebar-navbar-collapse">
          <ul class="nav navbar-nav">
            <li class="active"><a href="#">Usuarios</a></li>
            <li><a href="#">Productos</a></li>
            <li><a href="#">Historial</a></li>
            <li><a href="#">Reviews <span class="badge">1,118</span></a></li>
          </ul>
        </div>
  </div>
  <div class="col-sm-8">

<form class="form-inline">
 <div class="col-sm-4">
    <label>Nombres y Apellidos:</label>
  </div>
  <div class="col-sm-8">
    <input name="nombre" type="text" class="form-control" id="nombre" size="30"/><br/>
  </div>
 
  <div class="col-sm-4">
    <label>Documento de Identificación (DNI):</label>
  </div>
  <div class="col-sm-8">  
    <input name="dni" type="text" class="form-control" id="dni" size="30"/><br/>
  </div>

  <div class="col-sm-4">
    <label>Dirección: </label>
  </div>
  <div class="col-sm-8">
    <input name="direccion" type="text" class="form-control" id="direccion" size="30"/><br/>
  </div>

  <div class="col-sm-4">
    <label>Correo Electrónico: </label>
  </div>
  <div class="col-sm-8">
    <input name="email" type="text" class="form-control" id="email" size="30"/><br/>
  </div>

  <br/>
</form><br/>

<table>
   <tr>
   <td>
   <br/>
   Sexo<br/>
   <input type="radio" name="sexo" value="V"/> Masculino<br/>
   <input type="radio" name="sexo" value="M"/> Femenino</p>
   </td>
   <td>
   <br/>
   Nivel de estudios<br/>
   <input type="radio" name="estudios" value="elemental" checked="checked">
     Certificado escolar<br/>
   <input type="radio" name="estudios" value="basico"/> 
     Graduado Universitario <br/>
   <input type="radio" name="estudios" value="bachiller"/> 
     Bachiller - Formación Profesional <br/>
   <input type="radio" name="estudios" value="Diplomado"/> 
     Diplomado<br/>
   </td>
   <td>
   <br/>
   Interesado en los siguientes temas: <br/>
   <input type="checkbox" name="musica"/> Música<br/>
   <input type="checkbox" name="deportes"/> Deportes<br/>
   <input type="checkbox" name="cine"/> Cine<br/>
   <input type="checkbox" name="libros"/> Libros<br/>
   <input type="checkbox" name="ciencia"/> Ciencia</p>
   </td>
   </tr>
</table>
<br/>
<p>Día de la semana que le interesa recibirlo:</p>
<select name="dia">
    <option> Seleccionar </option> 
    <option value="">Lunes</option> 
    <option value="Martes">Martes</option> 
    <option value="Miércoles">Miercoles</option> 
    <option value="Jueves">Jueves</option> 
    <option value="Viernes">Viernes</option> 
    <option value="Sábado">Sábado</option> 
    <option value="Domingo">Domingo</option> 
</select>
</p>
<br/>

<button type="submit" class="btn btn-default">Comprobar el formulario</button>
<button type="submit" class="btn btn-default">Borrar todo</button>
</form>
</div>
  <div class="col-sm-3">
    
  </div>
</div>    
 </body>
 <script src="js/jquery.js"></script>
 <script src="js/bootstrap.min.js"></script>
</html>