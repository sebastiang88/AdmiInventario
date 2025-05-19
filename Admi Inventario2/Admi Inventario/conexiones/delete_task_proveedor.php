<?php

include("../conexiones/db.php");

if (isset($_GET['idproveedor'])) {
	$idproveedor=$_GET['idproveedor'];
	$query = "DELETE FROM proveedores WHERE idproveedor='$idproveedor'";
	$result = mysqli_query($conn,$query);
	if (!$result) {
		die("query failed");
	}
    $_SESSION['message']='tarea removida con exito';
    $_SESSION['message_type']='danger';
	header("Location:../HTML/RegistrosProveedores.php");
}
?>