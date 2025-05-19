<?php
include("db.php");

if (isset($_POST['Agregar'])) {
  $id_Entrada= $_POST['id_Entrada'];
  $Codigo_Producto= $_POST['Codigo_Producto'];
  $CantidadEntradaProducto= $_POST['CantidadEntradaProducto'];
  $PrecioEntradaProducto= $_POST['PrecioEntradaProducto'];
  $ValorEntradaProducto= $_POST['ValorEntradaProducto'];
  
 $query="INSERT INTO detalleentrada(id_Entrada,Codigo_Producto,CantidadEntradaProducto,PrecioEntradaProducto,ValorEntradaProducto) VALUES ('$id_Entrada','$Codigo_Producto','$CantidadEntradaProducto','$PrecioEntradaProducto','$ValorEntradaProducto')";
 
  $result=mysqli_query($conn,$query);

  if (!$result) {
  	die("query failed");
  }

  header("Location:../HTML/AgregarDetalle.php");
}
?>