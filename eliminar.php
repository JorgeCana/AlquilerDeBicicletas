<?php

include ("conexion.php");

$id=$_REQUEST['id'];
$nombre=$_POST['nombre'];
$apellido=$_POST['apellido'];
$correo=$_POST['correo'];
$direccion=$_POST['direccion'];
$telefono=$_POST['telefono'];
$tarjetaCredito=$_POST['tarjetaCredito'];


$query="DELETE FROM usuarios WHERE id='$id' ";
   
    $resultado= $conexion->query($query);

    if($resultado){
    	header("location: tabla.php");
    } else{
    	echo "insercion no exitosa";    
    }

?>