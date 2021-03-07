
<?php
include_once("conexion.php");

 
$nombre=$_POST["nombre"];
$telefono=$_POST["telefono"];
$email=$_POST["email"];
 

$sentencia=$base_de_datos->prepare("INSERT INTO persona(nombre,telefono,correo)
VALUES(:nombre,:telefono,:email);");




$sentencia->bindParam(':nombre',$nombre);
$sentencia->bindParam(':telefono',$telefono);
$sentencia->bindParam(':email',$email);


if ($sentencia->execute()) {
     //return header("Location:index.php");

     $var = file_get_contents('http://api.ipapi.com/'.$_SERVER['REMOTE_ADDR'].'?access_key=93c64b4c5ea8a849ebe2d9fdb56a6f95
     '); //Reemplaza el access_key por el tuyo
     $api = json_decode($var);
     
     switch ($api->country_code) {
     case 'ES':
     // Lleva a tu sitio versión ESPAÑA
     return header("Location: gracias_es.html");
     exit;
      
     case 'MX':
     // Lleva a tu sitio versión MEXICO
     return header("Location: gracias_mx.html");
     exit;
      
     case 'PE':
     // Lleva a tu sitio versión PERU
     return header("Location: gracias_pe.html");
     exit;
     case 'GT':
         // Lleva a tu sitio versión guate
         return header("Location: gracias_gt.html");
         exit;
      
      
     default:
     // Lleva a una página genérica cuando no es ninguno de los países anteriores
     return header('Location: index.php');
     exit;
     }



}
else {
    return "error";
}
 