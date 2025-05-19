<?php
include("../conexiones/db.php");

if (isset($_GET['id_Entrada'])) {
	$id_Entrada= $_GET['id_Entrada'];
	$query= "SELECT * FROM entradas WHERE id_Entrada='$id_Entrada'";
	$result=mysqli_query($conn,$query);
    if (mysqli_num_rows($result) == 1) {
         $row=mysqli_fetch_array($result);
         $id_Entrada=$row['id_Entrada'];
         $FacturaEntrada=$row['FacturaEntrada'];
         $FechaEntrada=$row['FechaEntrada'];
         $HoraEntrada=$row['HoraEntrada'];
      }  
}

if (isset($_POST['Actualizar'])) {
	$id_Entrada= $_GET['id_Entrada'];
	$FacturaEntrada= $_POST['FacturaEntrada'];
     $FechaEntrada=$_POST['FechaEntrada'];
     $HoraEntrada=$_POST['HoraEntrada'];
	
	$query= "UPDATE entradas set id_Entrada='$id_Entrada', FacturaEntrada='$FacturaEntrada',FechaEntrada='$FechaEntrada', HoraEntrada='$HoraEntrada' WHERE id_Entrada='$id_Entrada'";
	mysqli_query($conn,$query);
    
    header("Location:../HTML/RegistroEntrada.php");
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
        <center id="titulo"><h2 style="color: rgb(255, 255, 255);">Editar Entrada</h2></center>
<form action="../conexiones/edit.php?id_Entrada=<?php echo $_GET['id_Entrada']; ?>" method="POST">
	<br>
    <textarea name="FacturaEntrada" class="input" rows="2" placeholder="Actualiza la fecha"><?php echo $FacturaEntrada; ?></textarea>
    <br>
    <br>
    <textarea name="FechaEntrada" class="input" rows="1" placeholder="descripcion"><?php echo $FechaEntrada; ?></textarea>
    <br>
    <br>
    <textarea name="HoraEntrada" class="input" rows="1" placeholder="Cantidad"><?php echo $HoraEntrada; ?></textarea>
    <br>
    <br>
    <button class="ney" name="Actualizar">Actualizar</button>
</form>
</fieldset>
</body>