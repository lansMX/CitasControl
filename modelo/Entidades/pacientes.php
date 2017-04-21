<?php 
	require_once('..\db\conexion.php');
	require_once('..\mVfor.php');
	require_once('operacionesCRUD.php');
	/**
	* Paciente
	*/
	class Paciente extends conexion implements iOperacionesCRUD
	{		
		private $con;
   	
	  	public function __construct()  { 
            $this->con = new conexion();       
        }

		public function registraBD($query){

		}
		public function consultaBD($campo){

		}
		public function consultaBDC($campo, $query, $clausula = "id_paciente=?"){			
			return $this->con->consultaCampo($campo, $query, "paciente", $clausula);
		}
		public function actualizaBD($query){

		}
		public function eliminaBD($query){

		}
	}
	//Nombre completo, telefono, direccion, email, ver detalles -> expedientes y citas
	if (isset($_GET["op"]) && isset($_GET["cm"]) && isset($_GET["cr"]) && isset($_GET["op"]) == "fd") {		
		$cam = $_GET["cm"];
		$crt = $_GET["cr"];
		if (mVfor($cam) && mVfor($crt)) {
			$pac = new Paciente();
			if($val = $pac->consultaBDC($cam, $crt, "nombre=? or apellido_materno=? or apellido_paterno=? or telefono=?")
			{
				header("Location: ../modelo.php?rl=$val");
			}
			
		}
		

	}
	

 ?>