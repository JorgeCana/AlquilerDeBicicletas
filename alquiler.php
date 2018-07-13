<!doctype html>
<html lang="en">
<head>
<meta charset="uft-8">
<title>Jorge</title>
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


<form action= "operacion_guardar.php" method="POST">

<h1>ALQUILER DE BICICLETAS</h1><br/>


<input type="text" REQUIRED name="nombre" max-length="20" placeholder="nombre"/><br/><br/>
<input type="text" REQUIRED name="apellido" max-length="20" placeholder="apellido"/><br/><br/>
<input type="text" REQUIRED name="correo" max-length="20" placeholder="correo"/><br/><br/>
<input type="text" REQUIRED name="direccion" max-length="20" placeholder="direccion"/><br/><br/>
<input type="text" REQUIRED name="telefono" max-length="20" placeholder="telefono"/><br/><br/>
<input type="text" REQUIRED name="tarjetaCredito" max-length="20" placeholder="tarjetaCredito"/><br/><br/>
<input type="submit" value="Guardar"/><br/><br/>  
<div class="col-md-10 col-lg-8 col-xl-7 mx-auto">
            

</form> 
</body>
</html>