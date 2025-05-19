<?php

include("../conexiones/db.php");

if (isset($_GET['IdSalidas'])) {
	$IdSalidas=$_GET['IdSalidas'];
	$query = "DELETE FROM detallesalida WHERE IdSalidas ='$IdSalidas'";
	$result = mysqli_query($conn,$query);
	if (!$result) {
		die("query failed");
	}
    $_SESSION['message']='tarea removida con exito';
    $_SESSION['message_type']='danger';
	header("Location:../HTML/RegistroFactura.php");
}
?>