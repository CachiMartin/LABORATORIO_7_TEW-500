<?php

try {
    $connection = new PDO("mysql:host=localhost;dbname=Martin","root","");
    $connection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    echo "Conectado Exitosamente con PDO";
} catch (PDOException $e) {
   echo "La Conexion Fallo: ".$e->getMessage();
}
?>