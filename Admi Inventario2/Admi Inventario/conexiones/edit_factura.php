<?php
include("../conexiones/db.php");


if (isset($_GET['IdSalidas'])) {
	$IdSalidas= $_GET['IdSalidas'];
	$query= "SELECT * FROM detallesalida WHERE IdSalidas='$IdSalidas'";
	$result=mysqli_query($conn,$query);
    if (mysqli_num_rows($result) == 1) {
         $row=mysqli_fetch_array($result);
         $IdSalidas=$row['IdSalidas'];
         $Codigo_Producto=$row['Codigo_Producto'];
         $CantidadSalidaProductos=$row['CantidadSalidaProductos'];
         $PrecioSalidaProductos=$row['PrecioSalidaProductos'];
         $ValorSalidaProducto=$row['ValorSalidaProducto'];
      }  
}

if (isset($_POST['Actualizar'])) {
	$IdSalidas= $_GET['IdSalidas'];
	$Codigo_Producto= $_POST['Codigo_Producto'];
  $CantidadSalidaProductos=$_POST['CantidadSalidaProductos'];
  $PrecioSalidaProductos=$_POST['PrecioSalidaProductos'];
  $ValorSalidaProducto=$_POST['ValorSalidaProducto'];
	
	$query= "UPDATE detallesalida set IdSalidas='$IdSalidas', Codigo_Producto='$Codigo_Producto',CantidadSalidaProductos='$CantidadSalidaProductos', PrecioSalidaProductos='$PrecioSalidaProductos',ValorSalidaProducto='$ValorSalidaProducto' WHERE IdSalidas='$IdSalidas'";
	mysqli_query($conn,$query);
    
    header("Location:../HTML/RegistroFactura.php");
}

?> 

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" href="../CSS/CSSSEDIT.CSS">
</head>
    <title>Editar Datos</title>
</head>

</html>
<body>
<fieldset>
<center id="titulo"><h2 style="color: rgb(255, 255, 255);">Editar Detalle Salida</h2></center>
<form class="editsalida " action="../conexiones/edit_factura.php?IdSalidas=<?php echo $_GET['IdSalidas']; ?>" method="POST">
    <textarea name="IdSalidas" class="input" rows="1" placeholder="Actualiza el id de la entrada"><?php echo $IdSalidas; ?></textarea>
	  <br>
	  <br>
    <textarea name="Codigo_Producto" class="input" rows="2" placeholder="Actualiza la fecha"><?php echo $Codigo_Producto; ?></textarea>
    <br>
    <br>
    <textarea name="CantidadSalidaProductos" class="input" rows="1" placeholder="descripcion"><?php echo $CantidadSalidaProductos; ?></textarea>
    <br>
    <br>
    <textarea name="PrecioSalidaProductos" class="input" rows="1" placeholder="Cantidad"><?php echo $PrecioSalidaProductos; ?></textarea>
    <br>
    <br>
    <textarea name="ValorSalidaProducto" class="input" rows="1" placeholder="descripcion"><?php echo $ValorSalidaProducto; ?></textarea>
    <br>
    <br>
    <button class="ney" name="Actualizar">Actualizar</button>
</form>
</fieldset>
</body>