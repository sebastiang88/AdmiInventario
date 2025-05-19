<?php
include("db.php");

if (isset($_POST['Agregar'])) {
  $Codigo= $_POST['Codigo'];
  $ID= $_POST['ID'];
  $Tipodocumento= $_POST['Tipodocumento'];
  $Nombre= $_POST['Nombre'];
  $Apellido= $_POST['Apellido'];
  $Cargo= $_POST['Cargo'];
  $celular= $_POST['celular'];
  $Email=$_POST['Email'];

  $query="INSERT INTO empleados(Codigo,ID,Tipodocumento,Nombre,Apellido,Cargo,celular,Email) VALUES ('$Codigo','$ID','$Tipodocumento','$Nombre','$Apellido','$Cargo','$celular','$Email')";

  $result=mysqli_query($conn,$query);

  if (!$result) {
  	die("query failed");
  }

  header("Location:../HTML/FormularioEmpleados.php");
}
?>