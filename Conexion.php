<?php
$servidor = "localhost";
$usuario = "cris";
$contrasena = "cris";
$nombre_bd = "usuarios";
$consulta = mysqli_connect($servidor, $usuario, $contrasena, $nombre_bd);
if( !$consulta )
{
	die("fallo al conectar con la base de datos".mysqli_connect_error());
}
/*
Si se necesita saber si la conexion fue exitosa quita este comentario
else
{
    echo "Conexion establecida";
}
*/
mysqli_close($consulta);
?>
