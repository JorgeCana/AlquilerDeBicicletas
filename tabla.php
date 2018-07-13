<!doctype html>
<html>
<head>
	<title>tabla</title>
</head>


<body>

	<center>

	<table 

	bgcolor="62E974" border="3">
		<thead>
		   <tr>
			   <th colspan="1"><a href="index2.php">Home</a></th>
			   <th colspan="11">Datos de usuario</th>	
		   </tr>
		</thead>
		<tbody>
				<tr>
			    <td>id</td>
				<td>nombre</td>
				<td>apellido</td>
				<td>correo</td>
				<td>direccion</td>
				<td>telefono</td>
				<td>tarjetaCredito</td>
				
				<td colspan="2">operaciones</td>
				
			</tr>
	    <?php
	        include("conexion.php");
			
		    $query="SELECT * FROM usuarios";
		    $resultado= $conexion->query($query);
		    while($row=$resultado->fetch_assoc()){

		    ?>
		      <tr>
		        <td><?php echo $row['id'];?></td>
		        <td><?php echo $row['nombre'];?></td>
		      	<td><?php echo $row['apellido'];?></td>
		      	<td><?php echo $row['correo'];?></td>
		        <td><?php echo $row['direccion'];?></td>
		      	<td><?php echo $row['telefono'];?></td>
		      	<td><?php echo $row['tarjetaCredito'];?></td>
		      	
		      	<td><a href="actualizar2.php?id=<?php echo $row['id']; ?>">actualizar</a></td>
		      	<td><a href="eliminar.php?id=<?php echo $row['id']; ?>">eliminar</a></td>
		      </tr>

		      <?php
		          }   
          ?>

		</tbody>


	</table>
</center>
</body>
</html>