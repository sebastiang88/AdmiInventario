<?php
include("db.php");

if (isset($_POST['Agregar'])) {
  $IdCliente= $_POST['IdCliente'];
  $Tipodocumento= $_POST['Tipodocumento'];
  $Nombre= $_POST['Nombre'];
  $Apellido= $_POST['Apellido'];
  $Direccion= $_POST['Direccion'];
  $Email= $_POST['Email'];
  $telefono= $_POST['telefono'];
  

  $query="INSERT INTO clientes(IdCliente,Tipodocumento,Nombre,Apellido,Direccion,Email,telefono) VALUES ('$IdCliente','$Tipodocumento','$Nombre','$Apellido','$Direccion','$Email','$telefono')";

  $result=mysqli_query($conn,$query);

  if (!$result) {
  	die("query failed");
  }

  header("Location:../HTML/AgregarClientes.php");
}
?>