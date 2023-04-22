<?php
//CADA DE CONEXION AL SERVIDOR Y BASE DE DATOS
$connection = mysqli_connect("localhost","root","","Martin");
if(!$connection){
    die("La conexion fallo:".mysqli_connect_error());
}
echo "conectado exitosamente con procedimientos";
//CERRAR LA CONEXION

mysqli_close($connection);
?>