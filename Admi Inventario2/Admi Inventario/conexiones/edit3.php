<?php
include("../conexiones/db.php");

if (isset($_GET['id_Entrada'])) {
	$id_Entrada= $_GET['id_Entrada'];
	$query= "SELECT * FROM detalleentrada WHERE id_Entrada='$id_Entrada'";
	$result=mysqli_query($conn,$query);
    if (mysqli_num_rows($result) == 1) {
         $row=mysqli_fetch_array($result);
         $id_Entrada=$row['id_Entrada'];
         $Codigo_Producto=$row['Codigo_Producto'];
         $CantidadEntradaProducto=$row['CantidadEntradaProducto'];
         $PrecioEntradaProducto=$row['PrecioEntradaProducto'];
         $ValorEntradaProducto=$row['ValorEntradaProducto'];
      }  
}

if (isset($_POST['Actualizar'])) {
	$id_Entrada= $_GET['id_Entrada'];
	$Codigo_Producto= $_POST['Codigo_Producto'];
    $CantidadEntradaProducto=$_POST['CantidadEntradaProducto'];
    $PrecioEntradaProducto=$_POST['PrecioEntradaProducto'];
	$ValorEntradaProducto=$_POST['ValorEntradaProducto'];

	$query= "UPDATE detalleentrada set id_Entrada='$id_Entrada', Codigo_Producto='$Codigo_Producto',CantidadEntradaProducto='$CantidadEntradaProducto', PrecioEntradaProducto='$PrecioEntradaProducto',ValorEntradaProducto='$ValorEntradaProducto' WHERE id_Entrada='$id_Entrada'";
	mysqli_query($conn,$query);
    
    header("Location:../HTML/RegistroDetalle.php");
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
        <center id="titulo"><h2 style="color: rgb(255, 255, 255);">Editar Detalle Entrada</h2></center>
<form action="../conexiones/edit3.php?id_Entrada=<?php echo $_GET['id_Entrada']; ?>" method="POST">
    <textarea name="id_Entrada" class="input" rows="1" placeholder="Actualiza el id de la entrada"><?php echo $id_Entrada; ?></textarea>
	<br>
	<br>
    <textarea name="Codigo_Producto" class="input" rows="2" placeholder="Actualiza la fecha"><?php echo $Codigo_Producto; ?></textarea>
    <br>
    <br>
    <textarea name="CantidadEntradaProducto" class="input" rows="1" placeholder="descripcion"><?php echo $CantidadEntradaProducto; ?></textarea>
    <br>
    <br>
    <textarea name="PrecioEntradaProducto" class="input" rows="1" placeholder="Cantidad"><?php echo $PrecioEntradaProducto; ?></textarea>
    <br>
    <br>
    <textarea name="ValorEntradaProducto" class="input" rows="1" placeholder="Cantidad"><?php echo $ValorEntradaProducto; ?></textarea>
    <br>
    <br>
    <button class="ney" name="Actualizar">Actualizar</button>
</form>
</fieldset>
</body>