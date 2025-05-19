<?php
include("../conexiones/db.php");

if (isset($_GET['IdSalidas'])) {
	$IdSalidas= $_GET['IdSalidas'];
	$query= "SELECT * FROM salidas WHERE IdSalidas='$IdSalidas'";
	$result=mysqli_query($conn,$query);
    if (mysqli_num_rows($result) == 1) {
         $row=mysqli_fetch_array($result);
         $IdSalidas=$row['IdSalidas'];
         $FacturaSalidas=$row['FacturaSalidas'];
         $FechaSalidas=$row['FechaSalidas'];
         $HoraSalidas=$row['HoraSalidas'];
         $Estado=$row['Estado'];
         $IdCliente=$row['IdCliente'];
      }  
}

if (isset($_POST['Actualizar'])) {
	 $IdSalidas= $_GET['IdSalidas'];
	 $FacturaSalidas= $_POST['FacturaSalidas'];
     $FechaSalidas=$_POST['FechaSalidas'];
     $HoraSalidas= $_POST['HoraSalidas'];
     $Estado=$_POST['Estado'];
     $IdCliente=$row['IdCliente'];
	
	$query= "UPDATE salidas set IdSalidas='$IdSalidas', FacturaSalidas='$FacturaSalidas',FechaSalidas='$FechaSalidas',HoraSalidas='$HoraSalidas', Estado='$Estado',IdCliente='$IdCliente' WHERE IdSalidas='$IdSalidas'";
	mysqli_query($conn,$query);


    
    header("Location:../HTML/RegistroSalidas.php");
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
        <center id="titulo"><h2 style="color: rgb(255, 255, 255);">Editar Salida</h2></center>
<form action="../conexiones/edit_salida.php?IdSalidas=<?php echo $_GET['IdSalidas']; ?>" method="POST">
	<br>
    <textarea name="FacturaSalidas" class="input" rows="2" placeholder="Actualiza la fecha"><?php echo $FacturaSalidas; ?></textarea>
    <br>
    <br>
    <textarea name="FechaSalidas" class="input" rows="1" placeholder="descripcion"><?php echo $FechaSalidas; ?></textarea>
    <br>
    <br>
    <textarea name="HoraSalidas" class="input" rows="2" placeholder="Actualiza la fecha"><?php echo $HoraSalidas; ?></textarea>
    <br>
    <br>
    <textarea name="Estado" class="input" rows="1" placeholder="Cantidad"><?php echo $Estado; ?></textarea>
    <br>
    <br>
    <textarea name="IdCliente" class="input" rows="1" placeholder="Cantidad"><?php echo $IdCliente; ?></textarea>
    <br>
    <br>
    <button class="ney" name="Actualizar">Actualizar</button>
</form>
</fieldset>
</body>