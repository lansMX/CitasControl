 <?php
	require_once '../../../controlador/formularioContacto.php';
?>
 <!DOCTYPE html>
 <html>
 <head>
 	<meta name="viewport" content="width=device-width, initial-scale=1">
 	<link rel="stylesheet" type="text/css" href="../../../vista/css/estilosOpAd.css">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.0/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
 </head>
 <body>
 	<div class="container">
	 	<h1>Busqueda de pacientes</h1>
	 	
	 	<div class="formulario_AdReg">
			<?php
				$form = new formularioContacto();
				$arr = array(array(0=>"Nombre", 1=>"input", 2=>"text"));		
				echo $form->formulario($arr, "POST", "modelo/bsqPaciente.php");
			?>	
		</div>
		<br>
		<fieldset>			
			<legend>Resultados</legend>
			<div id="resultsPacientes"></div>
		</fieldset>
	</div>
 </body>
 </html>