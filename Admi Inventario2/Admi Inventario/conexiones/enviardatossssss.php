<?php
include("db.php");

if (isset($_POST['Agregar'])) {
  $IdSalidas= $_POST['IdSalidas'];
  $FacturaSalidas= $_POST['FacturaSalidas'];
  $FechaSalidas= $_POST['FechaSalidas'];
  $HoraSalidas= $_POST['HoraSalidas'];
  $Estado= $_POST['Estado'];
  $IdCliente= $_POST['IdCliente'];
  


  $query="INSERT INTO salidas(IdSalidas,FacturaSalidas,FechaSalidas,HoraSalidas,Estado,IdCliente) VALUES ('$IdSalidas','$FacturaSalidas','$FechaSalidas','$HoraSalidas','$Estado','$IdCliente')";

  $result=mysqli_query($conn,$query);

  if (!$result) {
  	die("query failed");
  }

  header("Location:../HTML/AgregarSalida.php");
}
?>