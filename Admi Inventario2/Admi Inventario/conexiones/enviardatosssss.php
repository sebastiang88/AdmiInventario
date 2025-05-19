<?php
include("db.php");

if (isset($_POST['Agregar'])) {
  $idproveedor= $_POST['idproveedor'];
  $Cod_Proveedor= $_POST['Cod_Proveedor'];
  $Nombre= $_POST['Nombre'];
  $Apellido= $_POST['Apellido'];
  $telefono= $_POST['telefono'];
  $email= $_POST['email'];
  $Nombre_Empresa= $_POST['Nombre_Empresa'];
  $direccion_Empresa= $_POST['direccion_Empresa'];


  $query="INSERT INTO proveedores(idproveedor,Cod_Proveedor,Nombre,Apellido,telefono,email,Nombre_Empresa,direccion_Empresa) VALUES ('$idproveedor','$Cod_Proveedor','$Nombre','$Apellido','$telefono','$email','$Nombre_Empresa','$direccion_Empresa')";

  

  $result=mysqli_query($conn,$query);

  if (!$result) {
  	die("query failed");
  }

  header("Location:../HTML/AgregarProveedores.php");
}
?>