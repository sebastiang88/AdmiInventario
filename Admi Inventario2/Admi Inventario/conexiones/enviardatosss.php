<?php
include("db.php");

if (isset($_POST['Agregar'])) {
  $id_Entrada= $_POST['id_Entrada'];
  $FacturaEntrada= $_POST['FacturaEntrada'];
  $FechaEntrada= $_POST['FechaEntrada'];
  $HoraEntrada= $_POST['HoraEntrada'];

  
 $query="INSERT INTO entradas(id_Entrada,FacturaEntrada,FechaEntrada,HoraEntrada) VALUES ('$id_Entrada','$FacturaEntrada','$FechaEntrada','$HoraEntrada')";
  
  
  $result=mysqli_query($conn,$query);

  if (!$result) {
  	die("query failed");
  }

  header("Location:../HTML/AgregarEntrada.php");
}
?>