<?php 

	/**
	* Formulario de contacto 
	*/
	class formularioContacto
	{
		
		function formulario($valores, $method, $action)
		{
			$identificador = explode(".", (explode("/", $action)[substr_count($action, "/")]))[0];
			
			$tagFormulario = "<form id='".$identificador."' class='formulario' name='".$identificador."' method='".$method."' action='".$action."'>";
			$char = "";
			foreach ($valores as $key=>$inputs) {				
				$placeholder = (!strpos($inputs[1], 'input'))? $inputs[0] : $char;

				$tagFormulario .= "<div class='campo'><label class='formInput' for='".$key."_".$identificador."'>".$inputs[0]."</label>";

				$tagFormulario .= ((strpos($inputs[1], "textarea") === 0) ? "<".$inputs[1]." id='".$key."_".$identificador."' class='formInput' name='".$key."_".$identificador."' placeholder='".$placeholder."'></".$inputs[1].">" : "<".$inputs[1]." id='".$key."_".$identificador."' class='formInput' name='".$key."_".$identificador."' type='".$inputs[2]."' placeholder='".$placeholder."'>")."</div>";
			}
			
			$tagFormulario .= "<div class='campo'><input id='$identificador' type='submit' text='Enviar'></div></form>";			
			return $tagFormulario;
		}
	}

?>


