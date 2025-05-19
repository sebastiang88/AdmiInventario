<?php include("../conexiones/db.php")  ?>
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
	<title>Registro Detalle</title>
	<link rel="stylesheet" type="text/css" href="../CSS/CSS3.css">
</head>
<center>
 <header class="uno">Detalle de Entrada
 </header>
</center>
 <body> 
  <table class="table" style="border: 2px solid #000">
    <thead>
    <tr> 
        <th>Codigo Entrada</th>
        <th>Codigo Producto</th>
        <th>Nombre Producto</th>
        <th>Cantidad</th>
        <th>Precio</th>
        <th>Valor</th>
    </tr>
    </thead>
    <tbody>
      <?php
      $query = "SELECT * FROM detalleentrada";
      $result_detalle = mysqli_query($conn,$query);

      while ($row = mysqli_fetch_array($result_detalle)) { ?>
        <tr>
          <td align="center"><?php echo $row['id_Entrada'] ?></td>
          
          <td align="center"><?php echo $row['Codigo_Producto']; ?></td>
          <td><?php
          $producto = $row['Codigo_Producto'];
          $query3 = "select Nombre_Productos from productos where Codigo_Producto = '$producto'";
          $res = mysqli_query($conn,$query3);
          $a = mysqli_fetch_array($res);
          echo $a[0];
          
          //echo $arreglo[1]; ?></td>

          <td align="center"><?php echo $row['CantidadEntradaProducto'] ?></td>
          <td align="center">$<?php echo number_format($row['PrecioEntradaProducto'])?></td>
          <td align="center"><?php echo number_format($row['ValorEntradaProducto'])?></td>
          
          <td>
          <a href="../conexiones/edit3.php?id_Entrada=<?php echo $row['id_Entrada']?>">
            <?php  if ($arreglo1[0] ==1) {
          echo"<img src='../imagenes/lapiz.jpg' width='25px' height='25px'>";
          } ?>           
          </a>
          <a href="../conexiones/delete_task3.php?id_Entrada=<?php echo $row['id_Entrada']?>">
            <?php  if ($arreglo1[0] ==1) {
          echo"<img src='../imagenes/EliminarSalida.png' title='Elimianar Entrada' width='25px' height='25px'>";
          } ?>
          </a> 
           <a href="../conexiones/delete_task_3Entrada.php?Codigo_Producto=<?php echo $row['Codigo_Producto']?>">
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
            $c2 = "select sum(ValorEntradaProducto) from detalleentrada";
            $rs2 = mysqli_query($conn,$c2);
            $arreglo2= mysqli_fetch_row($rs2);
            echo number_format($arreglo2[0]);
            ?>
          </td>
       </tr>
</table>
<hooter>
<br>
<?php  if ($arreglo1[0] ==1) {
echo"<a href='AgregarDetalle.php'><button class='boton3'>Agregar Datos</button></a>";
} ?>
</form>


</hooter>     
 </body>
 </html>