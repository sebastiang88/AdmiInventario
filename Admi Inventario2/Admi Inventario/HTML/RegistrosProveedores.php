<?php include("../conexiones/db.php") ?>
<?php

session_start();

$varsesion = $_SESSION['user_id'];
$sql1 = "select niveles.Nivel from usuarios INNER JOIN niveles on usuarios.Nivel = niveles.Nivel where usuarios.email = '$varsesion'";
$rs1 = mysqli_query($conn,$sql1);
$arreglo1 = mysqli_fetch_row($rs1);

if ($arreglo1[0] !=1 && $arreglo1[0] !=3) {
    echo "USTED NO TIENE AUTORIZACION";
die();
}
?> 
<!DOCTYPE 
<html>
<head>
    <meta charset="utf-8">
	<title>Registro de Proveedores</title>
	<link rel="stylesheet" type="text/css" href="../CSS/CSS3.css">
</head>
<center>
 <header
 class="uno">Registro Proveedores
 </header>
</center>
 <body>
  <table class="table" style="border: 2px solid #000">
    <thead>
      <tr>
        <th>ID</th>
        <th>Codigo</th>
        <th>Nombre</th>
        <th>Apellido</th>
        <th>Telefono</th>
        <th>Email</th>
        <th>Nombre_Empresa</th>
        <th>Direccion_Empresa</th>
      </tr>
    </thead>
    <tbody>
      <?php
      $query = "SELECT * FROM proveedores";
      $result_proveedores = mysqli_query($conn,$query);

      while ($row = mysqli_fetch_array($result_proveedores)) { ?>
        <tr>
          <td align="center"><?php echo $row['idproveedor'] ?></td>
          <td align="center"><?php echo $row['Cod_Proveedor'] ?></td>
          <td align="center"><?php echo $row['Nombre'] ?></td>
          <td align="center"><?php echo $row['Apellido'] ?></td>
          <td align="center"><?php echo $row['telefono'] ?></td>
          <td align="center"><?php echo $row['email'] ?></td>
          <td align="center"><?php echo $row['Nombre_Empresa'] ?></td>
          <td align="center"><?php echo $row['direccion_Empresa'] ?></td>
          <td>
           <a href="../conexiones/edit_proveedor.php?idproveedor=<?php echo $row['idproveedor']?>">
            <?php  if ($arreglo1[0] ==1) {
             echo"<img src='../imagenes/lapiz.jpg' width='25px' height='25px'>";
             } ?>           
           </a>
           <a href="../conexiones/delete_task_proveedor.php?idproveedor=<?php echo $row['idproveedor']?>">
            <?php  if ($arreglo1[0] ==1) {
             echo"<img src='../imagenes/basura.png' width='25px' height='25px'>";
             } ?>
           </a> 
          </td>
    <?php } ?>
    </tbody>
</table>
<br>
<?php  if ($arreglo1[0] ==1) {
echo"<a href='../HTML/AgregarProveedores.php'><button class='boton3'>Agregar Datos</button></a>";
 } ?>
</form>
 </body>
 </html>