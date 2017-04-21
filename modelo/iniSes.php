<?php 

	include 'mVfor.php';
	include 'modelo.php';
	
	if(isset($_POST['0_iniSes']) && isset($_POST['1_iniSes'])){
		$nom = $_POST['0_iniSes'];
		$con = $_POST['1_iniSes'];

		if (mVfor($nom)==="validado" && mVfor($con)==="validado") {				
			header("Location: modelo.php?us=$nom&ps=$con");
		}
		else {		
			header("Location: ../index.php");
		}
	}

 ?>