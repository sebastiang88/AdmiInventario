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
  <title>Reportes</title>
  <link rel="stylesheet" type="text/css" href="">
</head>
<center>
 <header
 class="uno">Imprimir reporte productos
 </header>
 <br>
 <br>
 <center>
 <body>
<center>
  <table class="table" style="border: 2px solid #000" id="imprime">
    <thead>
      <header>Productos</header>
      <br>
      <tr> 
        <th>Codigo</th>
        <th>Nombre</th>
        <th>Detalle</th>
        <th>Entradas</th>
        <th>Salidas</th>
        <th>Valor Unitario</th>
        <th>Existencias</th>
        <th>Id proveedor</th>
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
          </tr>
      <?php } ?>
    </tbody> 
</table>
<br>
<button type="button" id="desaparece" class="btn btn-light btn-sm"  onclick="javascript:imprim1(imprime);"><i class="fa fa-print" aria-hidden="true"></i> Imprimir</button> 
<br> 
</center>
<hooter>
</form>
</hooter>     
 </body>
<script>
function imprim1(imprime){
  var printContents = document.getElementById('imprime').innerHTML;
  var Obj = document.getElementById("desaparece");
     Obj.style.visibility = 'hidden';
          //window.open();
         //window.document.write(printContents);
       
        window.close(); // necessary for IE >= 10
        window.focus(); // necessary for IE >= 10
    window.print(printContents);
        window.scrollBy(150,0);
    window.close();
        return true;}
</script>