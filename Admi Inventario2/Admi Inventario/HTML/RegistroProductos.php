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
	<title>Registro de Productos</title>
	<link rel="stylesheet" type="text/css" href="../CSS/CSS3.css">
  <script src="https://kit.fontawesome.com/bebb1cef09.js" crossorigin="anonymous"></script>
</head>
<center>
 <header class="uno">Registro de Productos
 </header>
</center>
 <body>
     <center>
  <table class="table" style="border: 2px solid #000">
<thead>
      <tr> 
        <th>Codigo</th>
        <th>Nombre</th>
        <th>Detalle</th>
        <th>Entradas</th>
        <th>Salidas</th>
        <th>valor unitario</th>
        <th>existencias</th>
        <th>idproveedor</th>
        <th>Vencimiento</th>
      </tr>
    </thead>
    <tbody>
      <?php
      $query = "SELECT * FROM productos";
      $result_productos = mysqli_query($conn,$query);

      while ($row = mysqli_fetch_array($result_productos)) { ?>
        <tr>
          <td align="center"><?php echo $row['Codigo_Producto'] ?></td>
          <td align="center"><?php echo $row['Nombre_Productos'] ?></td>
          <td align="center"><?php echo $row['Detalle_Productos'] ?></td>
          <td align="center"><?php echo $row['EntradaProducto'] ?></td>
          <td align="center"><?php echo $row['SalidaProducto'] ?></td>
          <td align="center"><?php echo $row['valor_unitario'] ?></td>
          <td align="center"><?php echo $row['existencias'] ?></td>
          <td align="center"><?php echo $row['idproveedor'] ?></td>
          <td align="center"><?php echo $row['Vencimiento'] ?></td>
          <td>
           <a href="../conexiones/edit_productos.php?Codigo_Producto=<?php echo $row['Codigo_Producto']?>">
            <?php  if ($arreglo1[0] ==1) {
             echo"<img src='../imagenes/lapiz.jpg' width='25px' height='25px'>";
             } ?>           
           </a>
           <a href="../conexiones/delete_task_producto.php?Codigo_Producto=<?php echo $row['Codigo_Producto']?>">
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
echo"<a href='../HTML/AgregarProductos.php'><button class='boton3'>Agregar Datos</button></a>";
} ?>
</form>

</hooter>     
 </body>
 </html>