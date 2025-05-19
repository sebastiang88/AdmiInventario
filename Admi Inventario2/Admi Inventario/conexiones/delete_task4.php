<?php

include("../conexiones/db.php");

if (isset($_GET['Codigo'])) {
	$Codigo=$_GET['Codigo'];
	$query = "DELETE FROM empleados WHERE Codigo='$Codigo'";
	$result = mysqli_query($conn,$query);
	if (!$result) {
		die("query failed");
	}
    $_SESSION['message']='tarea removida con exito';
    $_SESSION['message_type']='danger';
	header("Location:../HTML/RegistrosEmpleados.php");
}
?>