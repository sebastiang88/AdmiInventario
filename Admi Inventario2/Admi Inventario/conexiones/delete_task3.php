<?php

include("../conexiones/db.php");

if (isset($_GET['id_Entrada'])) {
	$id_Entrada=$_GET['id_Entrada'];
	$query = "DELETE FROM detalleentrada WHERE id_Entrada='$id_Entrada'";
	$result = mysqli_query($conn,$query);
	if (!$result) {
		die("query failed");
	}
    $_SESSION['message']='tarea removida con exito';
    $_SESSION['message_type']='danger';
	header("Location:../HTML/RegistroDetalle.php");
}
?>