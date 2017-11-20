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


$result = $companydb -> createCollection('usuarios')

$insetOneResult = $result->insertOne(['nombre'->$field_name,'dni'->$field_dni,'direccion'->$field_direccion,'email'->$field_email,'sexo'->$field_sexo,'estudios'->$field_estudios,'interes'->$field_interes,'dia'->$field_dia]);



?>