<?php
include("../conexiones/db.php");

if (isset($_GET['Codigo_Producto'])) {
	$Codigo_Producto= $_GET['Codigo_Producto'];
	$query= "SELECT * FROM productos WHERE Codigo_Producto='$Codigo_Producto'";
	$result=mysqli_query($conn,$query);
    if (mysqli_num_rows($result) == 1) {
         $row=mysqli_fetch_array($result);
         $Codigo_Producto=$row['Codigo_Producto'];
         $Nombre_Productos=$row['Nombre_Productos'];
         $Detalle_Productos=$row['Detalle_Productos'];
         $EntradaProducto=$row['EntradaProducto'];
         $SalidaProducto=$row['SalidaProducto'];
         $valor_unitario=$row['valor_unitario'];
         $existencias=$row['existencias'];
         $idproveedor=$row['idproveedor'];
         $Vencimiento=$row['Vencimiento'];

      }  
}

if (isset($_POST['Actualizar'])) {
	 $Codigo_Producto= $_GET['Codigo_Producto'];
	 $Nombre_Productos= $_POST['Nombre_Productos'];
     $Detalle_Productos=$_POST['Detalle_Productos'];
     $EntradaProducto=$_POST['EntradaProducto'];
     $SalidaProducto=$_POST['SalidaProducto'];
     $valor_unitario=$_POST['valor_unitario'];
     $existencias=$_POST['existencias'];
     $idproveedor=$_POST['idproveedor'];
     $Vencimiento=$_POST['Vencimiento'];
	
	$query= "UPDATE productos set Codigo_Producto='$Codigo_Producto', Nombre_Productos='$Nombre_Productos',Detalle_Productos='$Detalle_Productos',EntradaProducto='$EntradaProducto',SalidaProducto='$SalidaProducto',valor_unitario='$valor_unitario',existencias='$existencias',idproveedor='$idproveedor',Vencimiento='$Vencimiento' WHERE Codigo_Producto='$Codigo_Producto'";
	mysqli_query($conn,$query);
    
    header("Location:../HTML/RegistroProductos.php");
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
        <center id="titulo"><h2 style="color: rgb(255, 255, 255);">Editar Productos</h2></center>
<form action="../conexiones/edit_productos.php?Codigo_Producto=<?php echo $_GET['Codigo_Producto']; ?>" method="POST">
	<br>
    <textarea name="Nombre_Productos" class="input" rows="2" placeholder="Actualiza la fecha"><?php echo $Nombre_Productos; ?></textarea>
    <br>
    <br>
    <textarea name="Detalle_Productos" class="input" rows="1" placeholder="descripcion"><?php echo $Detalle_Productos; ?></textarea>
    <br>
    <br>
    <textarea name="EntradaProducto" class="input" rows="1" placeholder="Cantidad"><?php echo $EntradaProducto; ?></textarea>
    <br>
    <br>
    <textarea name="SalidaProducto" class="input" rows="1" placeholder="descripcion"><?php echo $SalidaProducto; ?></textarea>
    <br>
    <br>
    <textarea name="valor_unitario" class="input" rows="1" placeholder="descripcion"><?php echo $valor_unitario; ?></textarea>
    <br>
    <br>
    <textarea name="existencias" class="input" rows="1" placeholder="descripcion"><?php echo $existencias; ?></textarea>
    <br>
    <br>
    <textarea name="idproveedor" class="input" rows="1" placeholder="descripcion"><?php echo $idproveedor; ?></textarea>
    <br>
    <br>
    <textarea name="Vencimiento" class="input" rows="1" placeholder="descripcion"><?php echo $Vencimiento; ?></textarea>
    <br>
    <br>
    <button class="ney" name="Actualizar">Actualizar</button>
</form>
</fieldset>
</body>