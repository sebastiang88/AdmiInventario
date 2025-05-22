<?php include("../conexiones/db.php")  ?>

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
	<title>Registro de Salidas</title>
	<link rel="stylesheet" type="text/css" href="../CSS/CSS3.css">
</head>
<center>
 <header class="uno">Registro Salidas
 </header>
</center>
 <body>
     <center>
  <table class="table" style="border: 2px solid #000">
    <thead>
      <tr> 
        <th>ID</th>
        <th>Factura</th>
        <th>Fecha</th>
        <th>Hora</th>
        <th>Estado</th>
        <th>ID Cliente</th>
      </tr>
    </thead>
    <tbody>
    <?php
      $query = "SELECT * FROM salidas";
      $result_salidas = mysqli_query($conn,$query);

      while ($row = mysqli_fetch_array($result_salidas)) { ?>
        <tr>
          <td align="center"><?php echo $row['IdSalidas'] ?></td>
          <td align="center"><?php echo $row['FacturaSalidas'] ?></td>
          <td align="center"><?php echo $row['FechaSalidas'] ?></td>
          <td align="center"><?php echo $row['HoraSalidas'] ?></td>
          <td align="center"><?php echo $row['Estado'] ?></td>
          <td align="center"><?php echo $row['IdCliente'] ?></td>
          <td>
           <a href="../conexiones/edit_salida.php?IdSalidas=<?php echo $row['IdSalidas']?>">
            <?php  if ($arreglo1[0] ==1) {
             echo"<img src='../imagenes/lapiz.jpg' width='25px' height='25px'>";
             } ?>           
           </a>
           <a href="../conexiones/delete_task_salida.php?IdSalidas=<?php echo $row['IdSalidas']?>">
            <?php  if ($arreglo1[0] ==1) {
             echo"<img src='../imagenes/basura.png' width='25px' height='25px'>";
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
echo"<a href='../HTML/AgregarSalida.php'><button class='boton3'>Agregar Datos</button></a>";
} ?>
</form>
</hooter>     
 </body>
 </html>