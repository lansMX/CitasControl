<?php 
	require_once 'ti.php';
	require_once 'controlador/formularioContacto.php';
?> 
<html> 
<body>
	<h1> 
		<?php startblock('title'); ?> 
		<?php endblock() ?>
	</h1>

	<div id='article'>
 		<?php startblock('article'); ?> 
 		<?php endblock() ?> 
 	</div> 

 	<div id='intro'>
 		<?php startblock('intro'); ?> 
 		<?php endblock() ?> 
 	</div> 

 	<div id='about'>
 		<?php startblock('about'); ?> 
 		<?php endblock() ?> 
 	</div> 

 	<div id='contact'>
 		<?php startblock('contact'); ?>
		<?php endblock() ?>
		<h1></h1>
		<div class="formulario1">
		<?php
			$form = new formularioContacto();
			$arr = array(array(0=>"Nombre", 1=>"input", 2=>"text"), array(0=>"Email", 1=>"input", 2=>"email"), array(0=>"Mensaje", 1=>"textarea", 2=>"textarea"));			
			echo $form->formulario($arr, "POST", "modelo/contacto.php");
		?> 	
		</div>	
 	</div>

 	<div id='about'>
 		<footer>Area informativa</footer>
 	</div>

 	<?php 
 		require_once('modales.php');
 		$modalRegistro = new modales();
 		$modalLogin = new modales();
 		
 		$campsRegistro = array(array(0=>"*Nombre completo", 1=>"input", 2=>"text"), array(0=>"*Email", 1=>"input", 2=>"email"), array(0=>"Telefono", 1=>"input", 2=>"tel"), array(0=>"Contraseña", 1=>"input", 2=>"password"), array(0=>"Confirma Contraseña", 1=>"input", 2=>"password"), array(0=>"Calle", 1=>"input", 2=>"text"), array(0=>"Colonia", 1=>"input", 2=>"text"), array(0=>"Numero Int-Ext", 1=>"input", 2=>"text"));	

 		echo $modalRegistro->modalForm($campsRegistro, "POST", "modelo/registro.php", "Registro", "*Campos obligatorios");

 		$campsLog = array(array(0=>"Nombre o email", 1=>"input", 2=>"text"), array(0=>"Contraseña", 1=>"input", 2=>"text"));	
 		echo $modalLogin->modalForm($campsLog, "POST", "modelo/iniSes.php", "Entrar", "Inicia sesion &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp<input action='recupera.php' type='submit' value='Olvidaste tu contraseña' style='color:#000;'>");
 	 ?>

 </body> 
 </html>