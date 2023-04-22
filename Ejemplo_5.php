<?php
//CADENA DE CONEXION AL SERVIDOR
$connection = new mysqli("localhost","root","","Martin");

//PARA VERIFICAR SI EXISTE ALGUN ERROR
if(!$connection){
    die("La conexion fallo:".$connection->connect_error);
}
echo "conectado exitosamente con Objetos";
//CERRAR LA CONEXION

mysqli_close($connection);
?>