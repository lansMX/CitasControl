<?php 

	require_once('./vista/vistaBase.php'); 
	//require_once '../controlador/formularioContacto.php';
?>
<!DOCTYPE html>
<html>
<head>
	<title>Atención Psicológica</title>
	
	<link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">

	<link rel="stylesheet" type="text/css" href="vista/css/estiloIndex.css">	
	<script type="text/javascript" src="vista/js/rmVfo.js"></script>


	<meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.0/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

</head>
<body>



<?php startblock('title') ?>
	<nav id="logbar" class="navbar navbar-default">
	  <div class="container-fluid">
	    <div class="navbar-header">
	      <a class="navbar-brand" href="#">Atención Psicológica</a>
	    </div>
	    <ul class="nav navbar-nav navbar-right">
	    	<li><a href=""><i class="fa fa-whatsapp fa-lg" aria-hidden="true"></i></span> 2222222222</a></li>
	    	<li><a href=""><i class="fa fa-facebook-square fa-lg" aria-hidden="true"></i></a></li>
	    	<li><a href=""><i class="fa fa-twitter-square fa-lg" aria-hidden="true"></i></a></li>
	      	<li><a href="" data-toggle="modal" data-target="#id_m_Registro"><span class="glyphicon glyphicon-user"></span> Registrate</a></li>
	      	<li><a href="" data-toggle="modal" data-target="#id_m_Entrar"><span class="glyphicon glyphicon-log-in"></span> Entrar</a></li>
	    </ul>
	  </div>
	</nav>
	
 	<div class="parallax"></div>
 	
 	<!--block start MENU-->
	<nav class="navbar navbar-default">
		<div class="container-fluid">		
		<div class="navbar-header">
	  		<a class="navbar-brand" href="#">Inicio</a>
		</div>
		<ul class="nav navbar-nav cambMedidas">		  
		  <li><a href="#">Sobre mí</a></li>
		  <li class="active"><a href="#">Terapias|Especialidades</a></li>
		  <li><a href="#">Testimonios</a></li>
		  <li><a href="#">Contactame</a></li>
			</ul>
		</div>
	</nav>
<?php endblock() ?>

	<?php startblock('article') ?>
	 	<div class="parallax"></div>
	 	<div class="container">
	 		<h1>Sobre mi</h1> 	
		 	<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
		 	tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
		 	quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
		 	consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
		 	cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
		 	proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
		 	<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
		 	tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
		 	quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
		 	consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
		 	cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
		 	proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
		 	<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
		 	tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
		 	quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
		 	consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
		 	cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
		 	proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>	
	 	</div>
	<?php endblock() ?>

	<?php startblock('intro') ?> 
		<div class="parallax"></div>
		<div class="container">
			<h1>Mis terapias y especialidades</h1>
			<h3>Thumnails</h3>
			<img src="">
			<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
		 	tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
		 	quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
		 	consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
		 	cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
		 	proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>		
		</div>
	<?php endblock() ?> 

	<?php startblock('about') ?> 
		<div class="parallax"></div>
		<div class="container">
			<h1>otra cosa</h1>	
			<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
		 	tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
		 	quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
		 	consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
		 	cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
		 	proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
		 	<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
		 	tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
		 	quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
		 	consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
		 	cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
		 	proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
		 	<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
		 	tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
		 	quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
		 	consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
		 	cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
		 	proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>	
		</div>
	<?php endblock() ?> 

	<?php startblock('contact') ?> 
		<div class="parallax"></div>
		<div class="container">
			<h1>Enviame tus dudas y con gusto te responderé</h1>
		</div>
	<?php endblock() ?>

	</body>
</html>