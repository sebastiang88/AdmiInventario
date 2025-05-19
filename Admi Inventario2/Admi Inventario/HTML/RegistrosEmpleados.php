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
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
	<title>Registros de Empleados</title>
	<link rel="stylesheet"  href="../CSS/CSS3.css">
</head>
<center>
 <header
 class="uno">Registro de Empleados
 </header>
</center>
 <body>
  <table class="table" style="border: 2px solid #000">
    
    <thead>
      <tr> 
        <th>Codigo</th>
        <th>ID</th>
        <th>Tipodocumento</th>
        <th>Nombre</th>
        <th>Apellido</th>
        <th>Cargo</th>
        <th>celular</th>
        <th>Email</th>
      </tr>
    </thead>
    <tbody>
      <?php
      $query = "SELECT * FROM empleados";
      $result_empleados = mysqli_query($conn,$query);

      while ($row = mysqli_fetch_array($result_empleados)) { ?>
        <tr>
          <td align="center"><?php echo $row['Codigo'] ?></td>
          <td align="center"><?php echo $row['ID'] ?></td>
          <td align="center"><?php echo $row['Tipodocumento'] ?></td>
          <td align="center"><?php echo $row['Nombre'] ?></td>
          <td align="center"><?php echo $row['Apellido'] ?></td>
          <td align="center"><?php echo $row['Cargo'] ?></td>
          <td align="center"><?php echo $row['celular'] ?></td>
          <td align="center"><?php echo $row['Email'] ?></td>
          <td>
            <a href="../conexiones/edit4.php?Codigo=<?php echo $row['Codigo']?>">
              <?php  if ($arreglo1[0] ==1) {
             echo "<img src='../imagenes/lapiz.jpg' width='25px' height='25p'>";
             } ?>           
           </a>
          <a href="../conexiones/delete_task4.php?Codigo=<?php echo $row['Codigo']?>">
            <?php  if ($arreglo1[0] ==1) {
             echo "<img src='../imagenes/basura.png' width='25px' height='25px'>";
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
echo"<a href='../HTML/FormularioEmpleados.php'><button class='boton3'>Agregar Datos</button></a>";
} ?>
</form>

</hooter>     
 </body>
 </html>