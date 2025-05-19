<?php

include("../conexiones/db.php");

if (isset($_GET['email'])) {
	$email=$_GET['email'];
	$query = "DELETE FROM usuarios WHERE email ='$email'";
	$result = mysqli_query($conn,$query);
	if (!$result) {
		die("query failed");
	}
    $_SESSION['message']='tarea removida con exito';
    $_SESSION['message_type']='danger';
	header("Location:../HTML/ModificarADMI.php");
}
?>