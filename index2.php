<!DOCTYPE html>

	<?php
	session_start();
	if (@!$_SESSION['user']) {
		header("Location:index.php");
	}elseif ($_SESSION['rol']==1) {
		header("Location:admin.php");
	}
	?>

<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>ALQUILER DE BICICLETAS</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="Jorge Caña">

    <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet"/>
    <script src="bootstrap/js/jquery-1.8.3.min.js"></script>
    <script src="bootstrap/js/bootstrap.min.js"></script>


    <link rel="shortcut icon" href="assets/ico/favicon.ico">
    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="assets/ico/apple-touch-icon-144-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="assets/ico/apple-touch-icon-114-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="72x72" href="assets/ico/apple-touch-icon-72-precomposed.png">
    <link rel="apple-touch-icon-precomposed" href="assets/ico/apple-touch-icon-57-precomposed.png">
  </head>
<body data-offset="40" background="images/fondotot.jpg" style="background-attachment: fixed">
<div class="container">
<header class="header">
<div class="row">
	<?php
	include("include/cabecera.php");
	?>
</div>
</header>

  <!-- Navbar
    ================================================== -->
<?php

include("include/menu.php");

?>
<!-- ======================================================================================================================== -->

<div id="myCarousel" class="carousel slide homCar">
		<div class="carousel-inner" style="border-top:18px solid #222; border-bottom:1px solid #222; border-radius:4px;">
		  <div class="item active">
			<img src="images/salud.jpg" alt="#" style="min-height:250px; min-width:100%"/>
			<div class="carousel-caption">
				  <h4>Salud</h4>
				  <p>
				   Al montar en bicicleta permites que tus rodillas y demás articulaciones descansen, ya que no tienen que aguantar el peso del cuerpo, que recae, en su mayoría, sobre el sillín
				  </p>
			</div>
		  </div>
		  <div class="item">
			<img src="images/depresion.jpg" alt="#" style="min-height:250px; min-width:100%"/>
			<div class="carousel-caption">
				  <h4>No mas depresion</h4>
				  <p>
				  Está comprobado que las personas que usan la bicicleta sufren menos tristeza y trastornos psicológicos. Esto se debe a que la actividad oxigena el cerebro más que cualquier otra y permite pensar mejor, segregando a su vez una hormona que genera una “adicción sana” al deporte.
				  </p>
			</div>
		  </div>
		  <div class="item">
			<img src="images/infarto.jpg" alt="#" style="min-height:250px; min-width:100%"/>
			<div class="carousel-caption">
				  <h4>Reduce el riesgo de infartos</h4>
				  <p>
				  El porcentaje es de alrededor del 50%, ya que al pedalear, el ritmo cardíaco va en aumento mientras que la presión sanguínea decrece. Entonces, como resultado: un corazón que trabaja economizado.
				  </p>
			</div>
		  </div>
		</div>
	<a class="left carousel-control" href="#myCarousel" data-slide="prev">‹</a>
	<a class="right carousel-control" href="#myCarousel" data-slide="next">›</a>
</div>

			
		
			<div class="span12">
				<div class="well well-small">
					<h4 >   ALQUILER DE BICICLETAS   </h4>
					<p>
				  DC Software y la alcaldia de Quito se unen para poder brindar el servicio de alquiler de bicicletas para la ciudad y asi poder disminuir la contaminacion al medio ambiente y reducir el trafico un 30%.
				  </p>
					
					<h4>ALQUILAR BICICLETAS AQUI:</h4>
					<th colspan="1"><a href="alquiler.php">ALQUILAR</a></th>


				</div>
			</div>
		
			
			
</div>
<h3><center>TESTIMONIOS</center></h3>
<div class="row">

	<div class="span4">
	<div class="thumbnail">
	<h3 style="text-align:center">Carla Ruiz</h3><img src="images/test1.jpg" alt="#"/>
	<div class="caption">
	
	
El alquiler de bicicletas es bueno hasta el momento, las unidades limpias, se mantienen en buen estado y nos ahorra tiempo para poder llegar al trabajo o universidad es una idea exelente gracias a la alcaldia de Quito y a DC Software por este Sistema Felicitaciones!.
	</p>
	<br/>
	</div>
	</div>
	</div>

	<div class="span4">
	<div class="thumbnail">
	<h3 style="text-align:center">Marcela Torres</h3>	
	<img src="images/test4.jpg" />
	<div class="caption">
		
	La plataforma es muy facil de usar nos ahorra mucho tiempo, para el trabajo o ir a estudiar es una idea bastante buena ya que nos sirve hasta para hacer ejercicio mientras vamos al trabajo, las unidades se mantienen limpias y los espacios de alquiler son de maravilla sigan adelante.

	</p>
	<br/>
	</div>
	</div>
	</div>

	<div class="span4">
	<div class="thumbnail">
	<h3 style="text-align:center">Vanesa Diaz</h3>	
	<img src="images/test5.jpg"/>
	<div class="caption">
		
     
     la plataforma del sistema es muy buena, facil navegacion, facil diseño, buena estructura, las bicicletas limpias en buen estado las estaciones de servicio bien conservadas. Es un sistema estupendo de calidad agradezco a la alcaldia de Quito por pensar en el cuidado del ambiente y el tiempo de cada usuario que uso este sistema.
	</p>
	<br/>
	</div>
	</div>
	</div>


</div>
<hr/>
<div class="row">
	<div class="span6">
	<div class="well well-small">
		<h3>DC SOFTWARE</h3>	
		<p>
		Lo mejor para nosotros es proporcionar un acceso libre, sencillo y coherente a a cada usuario que usa nuestro sistema para educadores, estudiantes y publico en general ofrecemos una plataforma buena y de facil manejo .
		<br><br></b></b>
		
		</p>
	</div>
	</div>
	<div class="span6">
	<div class="well well-small">
		<h3> PROXIMAMENTE</h3>
		<p>
		Tendremos una página actualizada y nuestros usuarios podrán contar con todos los servicios disponibles, asi como la visualización de nuevos servicios que se añadan al sistema.
		
		</p>
		
	</div>
	</div>
	
	
</div>
<!-- Footer
      ================================================== -->
<hr class="soften"/>
<footer class="footer">

<hr class="soften"/>
<p><center>&copy; Copyright Jorge Caña </center><br/><br/></p>
 </footer>
</div><!-- /container -->
    
	</style>
  </body>
</html>