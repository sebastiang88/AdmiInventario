<?php

include("../conexiones/db.php");

if (isset($_GET['Codigo_Producto'])) {
	$Codigo_Producto=$_GET['Codigo_Producto'];
	$query = "DELETE FROM detallesalida WHERE Codigo_Producto ='$Codigo_Producto'";
	$result = mysqli_query($conn,$query);
	if (!$result) {
		die("query failed");
	}
    $_SESSION['message']='tarea removida con exito';
    $_SESSION['message_type']='danger';
	header("Location:../HTML/RegistroFactura.php");
}
?>