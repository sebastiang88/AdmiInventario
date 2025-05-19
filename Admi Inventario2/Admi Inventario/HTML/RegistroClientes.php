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
    <title>Registros de Clientes</title>
	<link rel="stylesheet" type="text/css" href="../CSS/CSS3.css">
</head>
<center>
 <header class="uno">Registro de Clientes
 </header>
</center>
 <body>
  <table class="table" style="border: 2px solid #000">
    
<thead>
      <tr> 
        <th>ID</th>
        <th>Tipo Documento</th>
        <th>Nombre</th>
        <th>Apellido</th>
        <th>Direccion</th>
        <th>Email</th>
        <th>telefono</th>
     </tr>
    </thead>
    <tbody>
      <?php
      $query = "SELECT * FROM clientes";
      $result_clientes = mysqli_query($conn,$query);

      while ($row = mysqli_fetch_array($result_clientes)) { ?>
        <tr>
          <td align="center"><?php echo $row['IdCliente'] ?></td>
          <td align="center"><?php echo $row['Tipodocumento'] ?></td>
          <td align="center"><?php echo $row['Nombre'] ?></td>
          <td align="center"><?php echo $row['Apellido'] ?></td>
          <td align="center"><?php echo $row['Direccion'] ?></td>
          <td align="center"><?php echo $row['Email'] ?></td>
          <td align="center"><?php echo $row['telefono'] ?></td>
           <td>
           <a href="../conexiones/edit2.php?IdCliente=<?php echo $row['IdCliente']?>">
            <?php  if ($arreglo1[0] ==1) {
             echo "<img src='../imagenes/lapiz.jpg' width='25px' height='25px'>";
             } ?>           
           </a>
           <a href="../conexiones/delete_task2.php?IdCliente=<?php echo $row['IdCliente']?>">
            <?php  if ($arreglo1[0] ==1) {
             echo"<img src='../imagenes/basura.png' width='25px' height='25px'>";
              } ?> 
           </a> 
          </td>
       </tr>
      <?php } ?>

</tbody>
</table>
<hooter>
<br>
<?php  if ($arreglo1[0] ==1) {
echo"<a href='../HTML/AgregarClientes.php'><button class='boton3'>Agregar Datos</button></a>";
} ?> 
</form>


</hooter>     
 </body>
 </html>