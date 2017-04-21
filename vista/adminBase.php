<?php
	require_once 'ti.php';
	if(isset($_GET['f'])){
		header("Location: admin.php?elimina=o");
	}

	if (!isset($_SESSION)) { session_start(); }
	else {
		echo $_SESSION['ses']."adminBase";//header("Location: ../../index.php");
	}	
	
?>
<html>
	<head>
		<link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">

		<!--<link rel="stylesheet" type="text/css" href="vista/css/estiloIndex.css">	
		<script type="text/javascript" src="vista/js/rmVfo.js"></script>-->

		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="stylesheet" type="text/css" href="../css/estilo.css">
    	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.0/jquery.min.js"></script>
    	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
	</head>
 	<body>			
		<nav id="logbar" class="navbar navbar-inverse">
		  <div class="container-fluid">
		    <div class="navbar-header">
		      <a class="navbar-brand" href="#">Bienvenido <div id="usr"></div></a>
		    </div>
		    <ul class="nav navbar-nav navbar-right">
		      	<li><a href="" data-toggle="modal" data-target="#id_m_ActualizarPerfil"><span class="glyphicon glyphicon-pencil"></span> Actualiza tu perfil</a></li>
		      	<li><a id="actionHerit" href="?f=v"><span class="glyphicon glyphicon-log-out"></span> Salir</a></li>
		    </ul>
		  </div>
		</nav>

	  	<div class="col-md-3">
	  		<ul id="men_prin" class="nav nav-pills nav-stacked">			  
			</ul>
	  	</div>

	  	<div class="col-md-9">
	  		<div id="contenido"></div>
	  	</div>

  	</body>
</html>