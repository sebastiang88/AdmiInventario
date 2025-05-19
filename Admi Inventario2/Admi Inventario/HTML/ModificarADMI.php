<?php include("../conexiones/db.php") ?>
<?php

session_start();

$varsesion = $_SESSION['user_id'];
$sql1 = "select niveles.Nivel from usuarios INNER JOIN niveles on usuarios.Nivel = niveles.Nivel where usuarios.email = '$varsesion'";
$rs1 = mysqli_query($conn,$sql1);
$arreglo1 = mysqli_fetch_row($rs1);

if ($arreglo1[0] !=1) {
    echo "USTED NO TIENE AUTORIZACION";
die();
}
?>
<!DOCTYPE 
<html>
<head>
    <meta charset="utf-8">
  <title>Registro Factura</title>
  <link rel="stylesheet" type="text/css" href="../CSS/CSS3.css">
</head>
<center>
 <header
 class="uno">Registros de personal
 </header>
 <center>
 <body>
<center>
  <table class="table" style="border: 2px solid #000">
    <thead>
    <tr> 
        <th>Correo</th>
        <th>Contraseña</th>
        <th>Nivel</th>
    </tr>
    </thead>
    <tbody>
      <?php
      $query = "SELECT * FROM usuarios";
      $result_usuarios = mysqli_query($conn,$query);

      while ($row = mysqli_fetch_array($result_usuarios)) { ?>
        <tr>
          <td align="center"><?php echo $row['email'] ?></td>
          <td align="center"><?php echo $row['password'] ?></td>
          <td align="center"><?php echo $row['Nivel'] ?></td>
          <td>
           <a href="../conexiones/edit_usuarios.php?id=<?php echo $row['id']?>">
             <img src="../imagenes/lapiz.jpg" title="Modificar Datos" width="25px" height="25px">           
           </a> 
           <a href="../conexiones/delete_task_usuarios.php?email=<?php echo $row['email']?>">
             <img src="../imagenes/basura.png" title="Eliminar Usuario" width="25px" height="25px">
           </a> 
          </td>
       </tr>
      <?php } ?>
    </tbody>
</table>
</center>
<hooter>
<br>
<a  href="../login/RegistroADMI.php"><button class="botonlol">Agregar Datos</button></a></form>
</hooter>     
 </body>
 </html>