<!doctype html>
<html lang="en">
<head>
<meta charset="uft-8">
<title>JC</title>
<style type="text/css">
* {
	margin:0px;
	padding:1px;
}
body{
	background:url(fd.jpeg) #2b2b2a;
	background-position: center;
}
form{
	background:#333333;
	width: 360px;
	border:1px solid #4e4d4d;
	border-radius:3px;
	-moz-border-radius:3px;
	-webkit-border-radius:3px;
	box-shadow:inset 0 0 10px #000;
	margin:100px auto; 
}

form h1{
	text-align:center;
	color: #fff;
	font-weight: normal;
	font-size: 40pt;
	margin: 30px 0px; 
}

form input{
	width: 280px;
	height: 35px;
	padding: 0px 10px;
    margin: 10px 30px; 
	color: #6d6d6d;
	text-align: center;
}
form button{
	width: 135px;
	margin: 20px 0px 30px 30px;
	height: 50px;

     
}
</style>

</head>

<body>


 <?php

    $id=$_REQUEST['id'];

	        include("conexion.php");
			
		    $query="SELECT * FROM usuarios WHERE id='$id'";
		    $resultado= $conexion->query($query);
		    $row=$resultado->fetch_assoc();

		    ?>
		    
<form action= "actualizar_proceso.php?id=<?php echo $row['id']; ?>" method="POST">



<h1>registro</h1><br/>


<input type="text" REQUIRED name="nombre" max-length="20" placeholder="nombre" value="<?php echo $row['nombre']; ?>" /><br/><br/>
<input type="text" REQUIRED name="apellido" max-length="20" placeholder="apellido" value="<?php echo $row['apellido']; ?>" /><br/><br/>
<input type="text" REQUIRED name="correo" max-length="20" placeholder="correo" value="<?php echo $row['correo']; ?>" /><br/><br/>
<input type="text" REQUIRED name="direccion" max-length="20" placeholder="direccion" value="<?php echo $row['direccion']; ?>" /><br/><br/>
<input type="text" REQUIRED name="telefono" max-length="20" placeholder="telefono" value="<?php echo $row['telefono']; ?>" /><br/><br/>
<input type="text" REQUIRED name="tarjetaCredito" max-length="20" placeholder="tarjetaCredito" value="<?php echo $row['tarjetaCredito']; ?>" /><br/><br/>

<input type="submit" value="Guardar"/><br/><br/>  

</form> 
</body>
</html>