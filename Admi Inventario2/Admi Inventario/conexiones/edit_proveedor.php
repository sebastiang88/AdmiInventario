<?php
include("../conexiones/db.php");

if (isset($_GET['idproveedor'])) {
	$idproveedor= $_GET['idproveedor'];
	$query= "SELECT * FROM proveedores WHERE idproveedor='$idproveedor'";
	$result=mysqli_query($conn,$query);
    if (mysqli_num_rows($result) == 1) {
         $row=mysqli_fetch_array($result);
         $idproveedor=$row['idproveedor'];
         $Cod_Proveedor=$row['Cod_Proveedor'];
         $Nombre=$row['Nombre'];
         $Apellido=$row['Apellido'];
         $telefono=$row['telefono'];
         $email=$row['email'];
         $Nombre_Empresa=$row['Nombre_Empresa'];
         $direccion_Empresa=$row['direccion_Empresa'];
      }  
}

if (isset($_POST['Actualizar'])) {
	 $idproveedor= $_GET['idproveedor'];
	 $Cod_Proveedor= $_POST['Cod_Proveedor'];
     $Nombre=$_POST['Nombre'];
     $Apellido=$_POST['Apellido'];
     $telefono= $_POST['telefono'];
     $email= $_POST['email'];
     $Nombre_Empresa= $_POST['Nombre_Empresa'];
     $direccion_Empresa= $_POST['direccion_Empresa'];
	
	$query= "UPDATE proveedores set idproveedor='$idproveedor', Cod_Proveedor='$Cod_Proveedor',Nombre='$Nombre', Apellido='$Apellido', telefono='$telefono',email='$email',Nombre_Empresa='$Nombre_Empresa',direccion_Empresa='$direccion_Empresa' WHERE idproveedor='$idproveedor'";
	mysqli_query($conn,$query);
    
    header("Location:../HTML/RegistrosProveedores.php");
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
        <center id="titulo"><h2 style="color: rgb(255, 255, 255);">Editar Proveedores</h2></center>
<form action="../conexiones/edit_proveedor.php?idproveedor=<?php echo $_GET['idproveedor']; ?>" method="POST">
    <textarea name="idproveedor" class="input" rows="1" placeholder="Actualiza el id de la entrada"><?php echo $idproveedor; ?></textarea>
	<br>
	<br>
    <textarea name="Cod_Proveedor" class="input" rows="2" placeholder="Actualiza la fecha"><?php echo $Cod_Proveedor; ?></textarea>
    <br>
    <br>
    <textarea name="Nombre" class="input" rows="1" placeholder="descripcion"><?php echo $Nombre; ?></textarea>
    <br>
    <br>
    <textarea name="Apellido" class="input" rows="1" placeholder="Cantidad"><?php echo $Apellido; ?></textarea>
    <br>
    <br>
    <textarea name="telefono" class="input" rows="1" placeholder="descripcion"><?php echo $telefono; ?></textarea>
    <br>
    <br>
    <textarea name="email" class="input" rows="1" placeholder="descripcion"><?php echo $email; ?></textarea>
    <br>
    <br>
    <textarea name="Nombre_Empresa" class="input" rows="1" placeholder="descripcion"><?php echo $Nombre_Empresa; ?></textarea>
    <br>
    <br>
    <textarea name="direccion_Empresa" class="input" rows="1" placeholder="descripcion"><?php echo $direccion_Empresa; ?></textarea>
    <br>
    <br>
    <button class="ney" name="Actualizar">Actualizar</button>
</form>
</fieldset>
</body>