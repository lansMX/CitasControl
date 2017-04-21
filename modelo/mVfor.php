<?php 
		
	define("NO_PERMITIDO", "# $ % ^ & * ( ) + = - [ ] ' ; , . / { } | : < > ? ~ \"");

	function mVfor($cadena){		
		$perms = explode(" ", NO_PERMITIDO);
 		foreach ($perms as $char) {
 			/*echo $cadena . " compara " . $char;
 			echo "&nbsp&nbsp&nbsp";
 			var_dump(strpos($cadena, $char));
 			echo "<br>"; */
 			if (strpos($cadena, $char)) {
				return "Contraseña incorrecta";
				exit();			
			}	
 		}		
		return "validado";
	}

	function sepaURNrador($dir, $car=","){
		return explode($car, $dir);		
	}

 ?>