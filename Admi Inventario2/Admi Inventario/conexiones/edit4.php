<?php
include("../conexiones/db.php");

if (isset($_GET['Codigo'])) {
	$Codigo= $_GET['Codigo'];
	$query= "SELECT * FROM empleados WHERE Codigo='$Codigo'";
	$result=mysqli_query($conn,$query);
    if (mysqli_num_rows($result) == 1) {
         $row=mysqli_fetch_array($result);
         $Codigo=$row['Codigo'];
         $ID=$row['ID'];
         $Tipodocumento=$row['Tipodocumento'];
         $Nombre=$row['Nombre'];
         $Apellido=$row['Apellido'];
         $Cargo=$row['Cargo'];
         $celular=$row['celular'];
         $Email=$row['Email'];
      }  
}

if (isset($_POST['Actualizar'])) {
	 $Codigo= $_GET['Codigo'];
	 $id_Empleados= $_POST['ID'];
     $Tipodocumento=$_POST['Tipodocumento'];
     $Nombre=$_POST['Nombre'];
     $Apellido=$_POST['Apellido'];
     $Cargo_empleado=$_POST['Cargo'];
     $celular=$_POST['celular'];
     $Email=$_POST['Email'];
	
	$query= "UPDATE empleados set Codigo='$Codigo', ID='$ID',Tipodocumento='$Tipodocumento', Nombre='$Nombre',Apellido='$Apellido',Cargo='$Cargo',celular='$celular',Email='$Email' WHERE Codigo='$Codigo'";
	mysqli_query($conn,$query);
    
    header("Location:../HTML/RegistrosEmpleados.php");
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
<body>
    <fieldset>
        <center id="titulo"><h2 style="color: rgb(255, 255, 255);">Editar Empleados</h2></center>
<form action="../conexiones/edit4.php?Codigo=<?php echo $_GET['Codigo']; ?>" method="POST">
	<br>
	<br>
    <textarea name="ID" rows="2" class="input" placeholder="Actualiza la fecha"><?php echo $ID; ?></textarea>
    <br>
    <br>
    <textarea name="Tipodocumento"  class="input" rows="1" placeholder="descripcion"><?php echo $Tipodocumento; ?></textarea>
    <br>
    <br>
    <textarea name="Nombre" rows="1" class="input" placeholder="Cantidad"><?php echo $Nombre; ?></textarea>
    <br>
    <br>
    <textarea name="Apellido" rows="1" class="input" placeholder="Cantidad"><?php echo $Apellido; ?></textarea>
    <br>
    <br>
    <textarea name="Cargo" rows="1" class="input" placeholder="Cantidad"><?php echo $Cargo; ?></textarea>
    <br>
    <br>
    <textarea name="celular" rows="1" class="input" placeholder="Cantidad"><?php echo $celular; ?></textarea>
    <br>
    <br>
    <textarea name="Email" rows="1" class="input" placeholder="Cantidad"><?php echo $Email; ?></textarea>
    <br>
    <br>
    <button class="ney" name="Actualizar">Actualizar</button>
</form>
</fieldset>
</body>