<?php
include("db.php");

if (isset($_POST['Agregar'])) {
  $Codigo_Producto= $_POST['Codigo_Producto'];
  $Nombre_Productos= $_POST['Nombre_Productos'];
  $Detalle_Productos= $_POST['Detalle_Productos'];
  $EntradaProducto= $_POST['EntradaProducto'];
  $SalidaProducto= $_POST['SalidaProducto'];
  $valor_unitario= $_POST['valor_unitario'];
  $existencias= $_POST['existencias'];
  $idproveedor= $_POST['idproveedor'];
  $Vencimiento= $_POST['Vencimiento'];


  $query="INSERT INTO productos(Codigo_Producto,Nombre_Productos,Detalle_Productos,EntradaProducto,SalidaProducto,valor_unitario,existencias,idproveedor,Vencimiento) VALUES ('$Codigo_Producto','$Nombre_Productos','$Detalle_Productos','$EntradaProducto','$SalidaProducto','$valor_unitario','$existencias','$idproveedor','$Vencimiento')";

  echo $query;

  $result=mysqli_query($conn,$query);

  if (!$result) {
  	die("query failed");
  }

  header("Location:../HTML/AgregarProductos.php");
}
?>