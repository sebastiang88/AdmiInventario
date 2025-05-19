<?php include("../conexiones/db.php") ?>
<?php

session_start();

$varsesion = $_SESSION['user_id'];
$sql1 = "select niveles.Nivel from usuarios INNER JOIN niveles on usuarios.Nivel = niveles.Nivel where usuarios.email = '$varsesion'";
$rs1 = mysqli_query($conn,$sql1);
$arreglo1 = mysqli_fetch_row($rs1);

if ($arreglo1[0] == 1 and $arreglo1[0] ==2) {
    echo "USTED NO TIENE AUTORIZACION";
die();
}
?> 
<!DOCTYPE 
<html>
<head>
    <meta charset="utf-8">
	<title>Registro de Entradas</title>
	<link rel="stylesheet" type="text/css" href="../CSS/CSS3.css">
</head>
<center>
 <header class="uno">Registro Entradas
 </header>
 <center>
 <body>
<center>
  <table class="table" style="border: 2px solid #000">
    <thead>
    <tr> 
        <th>ID</th>
        <th>Factura</th>
        <th>Fecha</th>
        <th>Hora</th>
    </tr>
    </thead>
    <tbody>
      <?php
      $query = "SELECT * FROM entradas";
      $result_entradas = mysqli_query($conn,$query);

      while ($row = mysqli_fetch_array($result_entradas)) { ?>
        <tr>
          <td align="center"><?php echo $row['id_Entrada'] ?></td>
          <td align="center"><?php echo $row['FacturaEntrada'] ?></td>
          <td align="center"><?php echo $row['FechaEntrada'] ?></td>
          <td align="center"><?php echo $row['HoraEntrada'] ?></td>
          <td>
           <a href="../conexiones/edit.php?id_Entrada=<?php echo $row['id_Entrada']?>">
            <?php  if ($arreglo1[0] ==1) {
             echo"<img src='../imagenes/lapiz.jpg' title='Modificar Datos' width='25px' height='25px'>";
              } ?>           
           </a>
           <a href="../conexiones/delete_task.php?id_Entrada=<?php echo $row['id_Entrada']?>">
            <?php  if ($arreglo1[0] ==1) {
             echo "<img src='../imagenes/basura.png' title='Eliminar Entrada' width='25px' height='25px'>";
              } ?>  
           </a>  
          </td>
      <?php } ?>
    </tbody>
</table>
</center>
<hooter>
<br>
<?php  if ($arreglo1[0] ==1) {
echo"<a href='../HTML/AgregarEntrada.php'><button class='botonlol'>Agregar Datos</button></a>";
 } ?>  

</form>
</hooter>     
 </body>
 </html>