<?php 

	require_once(__DIR__.'\db\conexion.php');
	require_once('mVfor.php');
 
 /**
 * 
 */
 class Modelo
 { 	
	const NO_PERMITIDO = "# $ % ^ & * ( ) + = - [ ] ' ; , . / { } | : < > ? ~ \"";

	/**
	* CONTACTOS
	*/
	function reqCotactos(){
		
	}

	/**
	* REGISTRO
	*/
	function reqRegistro(){

	}

	/**
	* Inicio de sesion
	*/
	function inicioSesi($cadena){

		if($this->validacionQuery(join($cadena)) === "validado"){			
			$bd = new conexion();			
			$test = $bd->consulta($cadena, "pacientes");
			return $test;
		}		
		else{
			echo "No";
		}
	}	

 	/**
 	* Validacion
 	*/
 	function validacionQuery($string){
 		$perms = explode(" ", $this->getPerm());
 		foreach ($perms as $char) {
 			if (strpos($string, $char)) {
				return "Contraseña incorrecta";
				exit();			
			}	
 		}		
		return "validado";
 	}

 	public static function getPerm() 
	{ 
		return self::NO_PERMITIDO; 
	}

	function redirect($campo, $criterio, $loc){
		header("Location: $loc?op=fd&cm=$campo&cr=$criterio");
	}

 }

 	/**
 	* Login
 	*/
	if(isset($_GET['us']) && isset($_GET['ps'])){
		$nom = $_GET['us'];
		$con = $_GET['ps'];
		if (mVfor($nom) && mVfor($con)) {
			$md = new Modelo();
			if(($resp = $md->inicioSesi(array(0=>$nom, 1=>$con))) !== false) {
				session_start();
				$_SESSION['ses'] = $resp;			
				$md->redirect("role", $resp, "Entidades/pacientes.php");
			}
		}
		else {
			header("index.php");
		}
	}
	/**
	* Regreso de validacion de usuario
	*/
	if (isset($_GET['rl'])) {		
		if ($_GET['rl'] == "suprU") {
			header('Location: ../vista/Desktop/admin.php');	
		}else{
			header('Location: ../vista/Desktop/paciente.php');
		}
	}	

	/**
	* Busqueda Admin/Paciente
	
	if (isset($_GET['no'])) {
		$nom = $_GET['no'];
		if (mVfor($nom)) {
			$md = new Modelo();
			if(!== false) {
				$md->redirect($resp, "Entidades/pacientes.php");
			}
		}
	}*/

	/**
	* Respuesta de Bsq
	*/
	if (isset($_GET['rsq'])) {
		$nom = $_GET['rsq'];
		if (mVfor($nom)) {
			$md = new Modelo();			
			$md->redirect("nombre,apellido_paterno,apellido_materno,telefono,email,calle,colonia,numero", $nom, "Entidades/pacientes.php");
		}
	}


 ?>	