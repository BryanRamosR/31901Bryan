<?php
$host 	= 'localhost';
$nom 	= 'id21602204_bryanramr';
$pass 	= 'Jugralbrdo2002@';
$db 	= 'id21602204_logincrud2';

$conn = mysqli_connect($host, $nom, $pass, $db);

if (!$conn) 
{
  die("Error en la conexión: " . mysqli_connect_error());
}	
?>