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
	<title>Registro Factura</title>
	<link rel="stylesheet" type="text/css" href="../CSS/CSS3.css">
</head>
<center>
 <header
 class="uno">Registro Detalle de Salida
 </header>
 <center>
 <body>
<center>
  <table class="table" style="border: 2px solid #000">
    <thead>
    <tr> 
        <th>Codigo Salida</th>
        <th>Codigo Producto</th>
        <th>Nombre</th>
        <th>Cantidad Salida</th>
        <th>Precio Salida</th>
        <th>Total Salida</th>
    </tr>
    </thead>
    <tbody>
      <?php
      $query = "SELECT * FROM detallesalida";
      $result_detallesalida = mysqli_query($conn,$query);

      while ($row = mysqli_fetch_array($result_detallesalida)) { ?>
        <tr>
          <td align="center"><?php echo $row['IdSalidas'] ?></td>
          <td align="center"><?php echo $row['Codigo_Producto'] ?></td>
          <td><?php
          $producto = $row['Codigo_Producto'];
          $query3 = "select Nombre_Productos from productos where Codigo_Producto = '$producto'";
          $res = mysqli_query($conn,$query3);
          $a = mysqli_fetch_array($res);
          echo $a[0];
          
          //echo $arreglo[1]; ?></td>
          <td align="center"><?php echo $row['CantidadSalidaProductos'] ?></td>
          <td align="center">$<?php echo number_format($row['PrecioSalidaProductos'])?></td>
          <td align="center">$<?php echo number_format($row['ValorSalidaProducto']) ?></td>
          <td>
           <a href='../conexiones/edit_factura.php?IdSalidas=<?php echo $row['IdSalidas']?>'>
            <?php  if ($arreglo1[0] ==1) {
             echo"<img src='../imagenes/lapiz.jpg' title='Modificar Datos' width='25px' height='25px'>";
             } ?>
           </a>
           <a href='../conexiones/delete_task_factura.php?IdSalidas=<?php echo $row['IdSalidas']?>'>
             <?php  if ($arreglo1[0] ==1) {
             echo"<img src='../imagenes/EliminarSalida.png' title='Eliminar Salida' width='25px' height='25px'>";
             } ?>
           </a> 
           <a href="../conexiones/delete_task_factura2.php?Codigo_Producto=<?php echo $row['Codigo_Producto']?>">
             <?php  if ($arreglo1[0] ==1) {
             echo"<img src='../imagenes/EliminarProducto.jpg' title='Eliminar Producto' width='25px' height='25px'>";
             } ?>
           </a> 
          </td>
       </tr>
      <?php } ?>
    </tbody>
</table>
<table>
         <tr>
          <td colspan="6" bgcolor="ABB2B9">Valor Actual</td>
          <td align="right" colspan="4" bgcolor="ABB2B9">
            <?php
            $c2 = "select sum(ValorSalidaProducto) from detallesalida";
            $rs2 = mysqli_query($conn,$c2);
            $arreglo2= mysqli_fetch_row($rs2);
            echo number_format($arreglo2[0]);
            ?>
          </td>
       </tr>
</table>
</center>
<hooter>
<br>
<?php  if ($arreglo1[0] ==1) {
echo"<a href='AgregarFactura.php'><button class='botonlol'>Agregar Datos</button></a>";
} ?>
</form>
</hooter>     
 </body>
 </html>