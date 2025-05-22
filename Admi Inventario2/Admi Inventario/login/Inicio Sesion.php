<?php
session_start();

require 'database.php';

if (!empty($_POST['email']) && !empty($_POST['password'])) {
   $records = $conn->prepare('SELECT id, email, password FROM usuarios WHERE email=:email');
   $records->bindParam(':email', $_POST['email']);
   $records->execute();
   $Array3 = $records->fetch(PDO::FETCH_ASSOC);

   $message = '';

   if (count($Array3) > 0 && password_verify($_POST['password'], $Array3['password'])) {
      $_SESSION['user_id'] = $Array3['email'];
      //header("Location:../HTML/Registros.php");
      echo '<script>location.href="../HTML/Registros.php"</script>';
   } else {
      $message = 'Sus credenciales no son correctas';
   }
}
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="../CSS/CSS5.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Hubballi&family=Quicksand:wght@700&display=swap" rel="stylesheet">
	<title>login</title>
</head>
<header>
 </header>
 <body>
    <h1>Iniciar Sesion</h1>

     <?php if (!empty($message)) : ?> 
        <p><?= $message ?></p>
     <?php endif; ?>

   <form action="Inicio Sesion.php" method="POST">
    <input type="text" name="email" placeholder="Ingrese su email">
    <input type="password" name="password" placeholder="Ingrese su contraseña">
    <input type="submit" value="Ingresar">
   </form>

 </body> 
</html>