<?php
include("../conexiones/db.php");


if (isset($_GET['id'])) {
	$id= $_GET['id'];
	$query= "SELECT * FROM usuarios WHERE id='$id'";
	$result=mysqli_query($conn,$query);
    if (mysqli_num_rows($result) == 1) {
         $row=mysqli_fetch_array($result);
         $email=$row['email'];
         $password=$row['password'];
         $Nivel=$row['Nivel'];
      }  
}

if (isset($_POST['Actualizar'])) {
  $id=$_GET['id'];
	$email= $_POST['email'];
	$password = password_hash($_POST['password'], PASSWORD_BCRYPT);
  $Nivel=$_POST['Nivel'];
	
	$query= "UPDATE usuarios set email='$email', password='$password',Nivel='$Nivel' WHERE id='$id'";
	mysqli_query($conn,$query);
    
    header("Location:../HTML/ModificarADMI.php");
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
<center id="titulo"><h2 style="color: rgb(255, 255, 255);">Modificar Usuarios</h2></center>
<form class="editsalida " action="../conexiones/edit_usuarios.php?id=<?php echo $_GET['id']; ?>" method="POST">
    <textarea name="email" class="input" rows="1" placeholder="Actualiza el id de la entrada"><?php echo $email; ?></textarea>
	<br>
	<br>
    <textarea name="password" class="input" rows="2" placeholder="Actualiza la fecha"><?php echo $password; ?></textarea>
    <br>
    <br>
    <textarea name="Nivel" class="input" rows="1" placeholder="descripcion"><?php echo $Nivel; ?></textarea>
    <br>
    <br>
    <button class="ney" name="Actualizar">Actualizar</button>
</form>
</fieldset>
</body>