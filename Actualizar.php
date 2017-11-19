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
<h1>ACTUALIZACIÓN DE DATOS</h1>
<form action="comprobar.php" method="post"/>

<p>Nombre: <input type="text" name="nombre" size="35"/><br/>
<p>Apellidos: <input type="text" name="apellidos" size="35"/><br/>   
<p>DNI: <input type="text" name="dni" size="40"/><br/>
<p>Dirección: <input type="text" name="direccion" size="35"/><br/>
<p>E-mail: <input type="text" name="email" size="35"/><br/>
<p>Contraseña: <input type="password" name="contras" size="35"/><br/>
<table>
   <tr>
   <td>
   Sexo<br/>
   <input type="radio" name="sexo" value="V"/> Masculino<br/>
   <input type="radio" name="sexo" value="M"/> Femenino</p>
   </td>
   <td>
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
   Interesado en los siguientes temas: <br/>
   <input type="checkbox" name="musica"/> Música<br/>
   <input type="checkbox" name="deportes"/> Deportes<br/>
   <input type="checkbox" name="cine"/> Cine<br/>
   <input type="checkbox" name="libros"/> Libros<br/>
   <input type="checkbox" name="ciencia"/> Ciencia</p>
   </td>
   </tr>
</table>
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
<p><input type="reset" value="Borrar todo"></p>
</form>
</body>
<script src="js/jquery.js"></script>
 <script src="js/bootstrap.min.js"></script>
</html>