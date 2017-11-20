<?php
$field_name = $_POST['nombre'];
$field_email = $_POST['dni'];
$field_subject = $_POST['direccion'];
$field_message = $_POST['email'];
$field_sexo = $_POST['sexo'];

$client = new MongoDB\Client;

$companydb = $client->companydb;


$result = $companydb -> createCollection('empcolection')

   var_dump( )

?>