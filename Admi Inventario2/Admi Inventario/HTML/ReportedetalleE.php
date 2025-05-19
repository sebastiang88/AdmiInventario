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
 class="uno">Imprimir reporte de detalle de entradas
 <br>
 <br>
 <center>
 <body>
<center>
  <table class="table" style="border: 2px solid #000" id="imprime">
    <thead>
      <header>Detalle de entradas</header>
      <br>
      <tr> 
        <th>Codigo Entrada</th>
        <th>Codigo Producto</th>
        <th>Nombre Producto</th>
        <th>Cantidad</th>
        <th>Precio</th>
        <th>Total</th>
    </tr>
    </thead>
  <tbody>
      <?php
      $query = "SELECT * FROM detalleentrada";
      $result_detalleentrada = mysqli_query($conn,$query);

      while ($row = mysqli_fetch_array($result_detalleentrada)) { ?>
        <tr>
          <td align="center"><?php echo $row['id_Entrada'] ?></td>
          <td align="center"><?php echo $row['Codigo_Producto'] ?></td>
          <td align="center"><?php echo $row['CantidadEntradaProducto'] ?></td>
          <td align="center"><?php echo $row['PrecioEntradaProducto'] ?></td>
          <td align="center"><?php echo $row['ValorEntradaProducto'] ?></td>
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