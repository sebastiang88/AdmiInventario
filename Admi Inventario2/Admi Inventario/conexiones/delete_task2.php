<?php

include("../conexiones/db.php");

if (isset($_GET['IdCliente'])) {
	$IdCliente=$_GET['IdCliente'];
	$query = "DELETE FROM clientes WHERE IdCliente='$IdCliente'";
	$result = mysqli_query($conn,$query);
	if (!$result) {
		die("query failed");
	}
    $_SESSION['message']='tarea removida con exito';
    $_SESSION['message_type']='danger';
	header("Location:../HTML/RegistroClientes.php");
}
?>