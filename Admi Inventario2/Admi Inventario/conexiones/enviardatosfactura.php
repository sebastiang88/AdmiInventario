<?php
include("db.php");

if (isset($_POST['Agregar'])) {
  $IdSalidas= $_POST['IdSalidas'];
  $Codigo_Producto= $_POST['Codigo_Producto'];
  $CantidadSalidaProductos= $_POST['CantidadSalidaProductos'];
  $PrecioSalidaProductos= $_POST['PrecioSalidaProductos'];
  $ValorSalidaProducto= $_POST['ValorSalidaProducto'];
  
 $query="INSERT INTO detallesalida(IdSalidas,Codigo_Producto,CantidadSalidaProductos,PrecioSalidaProductos,ValorSalidaProducto) VALUES ('$IdSalidas','$Codigo_Producto','$CantidadSalidaProductos','$PrecioSalidaProductos','$ValorSalidaProducto')";

  $result=mysqli_query($conn,$query);

  if (!$result) {
  	die("query failed");
  }

  header("Location:../HTML/AgregarFactura.php");
}
?>