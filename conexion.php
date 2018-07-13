<?php

$conexion = new mysqli("sql12.freesqldatabase.com","sql12247187","BBeIsvXC7T","sql12247187");

if($conexion){
	echo "conexion exitosa";
	
}
else{

	echo "conexion no exitosa";
}

?>