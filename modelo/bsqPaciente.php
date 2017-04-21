<?php 
	include 'mVfor.php';

	if (isset($_POST['0_bsqPaciente'])) {
		$busqueda = $_POST['0_bsqPaciente'];
		if (mVfor($busqueda) == 'validado') {
			header("location : modelo.php?rsq=".$busqueda);
		}
		else{
			echo "No se pudo realizar la busqueda, verifique sus datos";
		}
	}
 ?>