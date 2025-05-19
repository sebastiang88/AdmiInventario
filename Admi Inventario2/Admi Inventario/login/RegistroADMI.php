<?php 
 
 include 'database.php';

 $message = '';

 if (!empty($_POST['email']) && !empty($_POST['password'])) {
    $sql = "INSERT INTO usuarios (email, password,Nivel) VALUES (:email,:password,:Nivel)";
    $stmt = $conn->prepare($sql);
    $stmt->bindParam(':email',$_POST['email']);
    $stmt->bindParam(':Nivel',$_POST['Nivel']); 
    $password = password_hash($_POST['password'], PASSWORD_BCRYPT);
    $stmt->bindParam(':password',$password); 
   

    if ($stmt->execute()) {
       $message = 'Usuario creado satisfactoriamente';
    } else {
      $message = 'Usuario no creado';
    }
 }

 ?> 

<!DOCTYPE 
<html>
<head>
	<meta charset="utf-8">
	<title>RegistroAdministador</title>
	<link rel="stylesheet" type="text/css" href="../CSS/CSS5.css">
</head>
<body>
   <?php if (!empty($message)): ?>
      <p><?= $message ?></p>
   <?php endif;?>

<h1>Registrarse</h1>
 <form action="RegistroADMI.php" action="" method="POST">
    <input type="email" name="email" placeholder="Ingrese su email">
    <input type="password" name="password" placeholder="Ingrese su Contraseña">
          Nivel: <select class="perro" name="Nivel">
        <?php

         include("../conexiones/db.php");

         $consulta="SELECT * FROM niveles";
         $ejecutar=mysqli_query($conn,$consulta) or die(mysqli_error($conn));

        ?>

        <?php foreach ($ejecutar as $opciones): ?>
            <option value="<?php echo $opciones['Nivel']?>"><?php echo $opciones['Nombre_Nivel']?></option>  
        <?php endforeach ?>

                           
      </select>
      <br>
    <input type="submit" value="Registrarse">
   </form>
</body>
</html>