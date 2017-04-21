<?php 
	
	include '../adminBase.php';	
	
	if (!isset($_SESSION)) {
		session_start();	
	}
	if (!isset($_SESSION['ses'])) {
		header("Location: ../../index.php");
		//echo $_SESSION['ses']."IFadmin";
	}
	/*else{
		echo $_SESSION['ses']."ELSEadmin";
	}*/
	if (isset($_GET['elimina'])) {
		echo $_SESSION['ses']."~before";
		unset($_SESSION);
	    session_unset();
	    session_destroy();
	    //echo $_SESSION['ses']."~after";
	    header("Location: ../../index.php");
	}
	/*else {
		header("Location: ../../index.php");
	}*/
	//echo $_SESSION['ses']."admin";
 ?>
<!DOCTYPE html>
<html>
<head>
	<title>Administracion</title>	

</head>
<body>
	<script type="text/javascript" src="../js/admin.js"></script>	
</body>
</html>