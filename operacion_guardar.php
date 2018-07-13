<?php

include ("conexion.php");

$nombre=$_POST['nombre'];
$apellido=$_POST['apellido'];
$correo=$_POST['correo'];
$direccion=$_POST['direccion'];
$telefono=$_POST['telefono'];
$tarjetaCredito=$_POST['tarjetaCredito'];


$query="INSERT INTO usuarios(nombre,apellido,correo,direccion,telefono,tarjetaCredito) VALUES ('$nombre','$apellido','$correo','$direccion','$telefono','$tarjetaCredito')";
   
    $resultado= $conexion->query($query);

    if($resultado){
    	header("location: tabla.php");
    } else{
    	echo "insercion no exitosa";    
    }

?>