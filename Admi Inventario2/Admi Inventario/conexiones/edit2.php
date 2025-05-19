<?php
include("../conexiones/db.php");

if (isset($_GET['IdCliente'])) {
	$IdCliente= $_GET['IdCliente'];
	$query= "SELECT * FROM clientes WHERE IdCliente='$IdCliente'";
	$result=mysqli_query($conn,$query);
    if (mysqli_num_rows($result) == 1) {
         $row=mysqli_fetch_array($result);
         $IdCliente=$row['IdCliente'];
         $Tipodocumento=$row['Tipodocumento'];
         $Nombre=$row['Nombre'];
         $Apellido=$row['Apellido'];
         $Direccion=$row['Direccion'];
         $Email=$row['Email'];
         $telefono=$row['telefono'];
         }
}

if (isset($_POST['Actualizar'])) {
	$IdCliente=$_GET['IdCliente'];
    $Tipodocumento=$_POST['Tipodocumento'];
    $Nombre=$_POST['Nombre'];
    $Apellido=$_POST['Apellido'];
    $Direccion=$_POST['Direccion'];
    $Email=$_POST['Email'];
    $telefono=$_POST['telefono'];
	
	
	$query= "UPDATE clientes set IdCliente='$IdCliente', Tipodocumento='$Tipodocumento', Nombre='$Nombre', Apellido='$Apellido', Direccion='$Direccion', Email='$Email', telefono='$telefono' WHERE IdCliente='$IdCliente'";
	
    

    mysqli_query($conn,$query);
    
    header("Location:../HTML/RegistroClientes.php");
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
        <center id="titulo"><h2 style="color: rgb(255, 255, 255);">Editar Clientes</h2></center>
<form action="../conexiones/edit2.php?IdCliente=<?php echo $_GET['IdCliente']; ?>" method="POST">
    <textarea name="IdCliente" class="input" rows="1" placeholder="Actualiza el id de el cliente"><?php echo $IdCliente; ?></textarea>
	<br>
	<br>
    <textarea name="Tipodocumento" class="input" rows="2" placeholder="Actualiza el tipo de documento"><?php echo $Tipodocumento; ?></textarea>
    <br>
    <br>
    <textarea name="Nombre" rows="1" class="input" placeholder="Primer Nombre"><?php echo $Nombre; ?></textarea>
    <br>
    <br>
    <textarea name="Apellido" rows="1" class="input" placeholder="Segundo Nombre"><?php echo $Apellido; ?></textarea>
    <br>
    <br>
    <textarea name="Direccion" rows="1" class="input" placeholder="calle 54 f sur..."><?php echo $Direccion; ?></textarea>
    <br>
    <br>
    <textarea name="Email" rows="1" class="input" placeholder="Correo"><?php echo $Email; ?></textarea>
    <br>
    <br>
    <textarea name="telefono" rows="1" class="input" placeholder="telefono"><?php echo $telefono; ?></textarea>
    <br>
    <br>
    <button class="ney" name="Actualizar">Actualizar</button>
</form>
</fieldset>
</body>