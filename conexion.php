<?php

$contrasenia="";
$usuario="root";
$nombrebd="trabajo";

try {
    $base_de_datos= new PDO('mysql:host=localhost;dbname='.$nombrebd,$usuario,$contrasenia);
   /* echo "<script>alert('La conexion se realizo correctamente')</script>";*/

} catch (Exception $e) {
    echo "<script>alert('Ocurrio un error al conectarse')</script>".$e->getMessage();
}

?>