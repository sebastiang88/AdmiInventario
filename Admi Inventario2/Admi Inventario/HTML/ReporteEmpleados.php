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
 class="uno">Imprimir reportes
 </header>
 <br>
 <br>
 <center>
 <body>
<center>
  <table class="table" style="border: 2px solid #000" id="imprime">
    <thead>
      <header>Empleados</header>
      <br>
    <tr> 
        <th>Codigo</th>
        <th>ID</th>
        <th>Tipo documento</th>
        <th>Nombre</th>
        <th>Apellido</th>
        <th>Cargo</th>
        <th>Celular</th>
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
          </tr>
      <?php } ?>
    </tbody> 
</table>
<br> 
</center>
<hooter>
</form>
</hooter>     
 </body>

 <br>

<body>
<center>
  <table class="table" style="border: 2px solid #000" id="imprime">
    <thead>
      <header>Clientes</header>
      <br>
    <tr> 
        <th>ID</th>
        <th>Tipo Documento</th>
        <th>Nombre</th>
        <th>Apellido</th>
        <th>Direccion</th>
        <th>Email</th>
        <th>Telefono</th>
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
          </tr>
      <?php } ?>
    </tbody> 
</table>
<br> 
</center>
<hooter>
</form>
</hooter>     
 </body>

 <br>

<body>
<center>
  <table class="table" style="border: 2px solid #000" id="imprime">
    <thead>
      <header>Proveedores</header>
      <br>
    <tr> 
        <th>ID</th>
        <th>Codigo</th>
        <th>Nombre</th>
        <th>Apellido</th>
        <th>Telefono</th>
        <th>Empresa</th>
        <th>Direccion</th>
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
          <td align="center"><?php echo $row['Nombre_Empresa'] ?></td>
          <td align="center"><?php echo $row['direccion_Empresa'] ?></td>
          </tr>
      <?php } ?>
    </tbody> 
</table>
<br> 
</center>
<hooter>
</form>
</hooter>     
 </body>

 <br>

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
</center>
<hooter>
</form>
</hooter>     
 </body>

 <br>

 <body>
<center>
  <table class="table" style="border: 2px solid #000" id="imprime">
    <thead>
      <header>Entradas</header>
      <br>
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
          </tr>
      <?php } ?>
    </tbody> 
</table>
<br>
</center>
<hooter>
</form>
</hooter>     
 </body>

 <br>

  <body>
<center>
  <table class="table" style="border: 2px solid #000" id="imprime">
    <thead>
      <header>Salidas</header>
      <br>
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
          </tr>
      <?php } ?>
    </tbody> 
</table>
<br>
</center>
<hooter>
</form>
</hooter>     
 </body>

 <br>

   <body>
  <center>
  <table class="table" style="border: 2px solid #000" id="imprime">
    <thead>
      <header>Detalle de salida</header>
      <br>
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
          <td align="center"><?php echo $row['CantidadSalidaProductos'] ?></td>
          <td align="center"><?php echo $row['PrecioSalidaProductos'] ?></td>
          <td align="center"><?php echo $row['ValorSalidaProducto'] ?></td>
          </tr>
      <?php } ?>
    </tbody> 
</table>
<br>
</center>
<hooter>
</form>
</hooter>     
 </body>

 <br>

 <body>
  <center>
  <table class="table" style="border: 2px solid #000" id="imprime">
    <thead>
      <header>Detalle de Entradas</header>
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
<br>
<button type="button" id="desaparece" class="btn btn-light btn-sm"  onclick="javascript:imprim1(imprime);"><i class="fa fa-print" aria-hidden="true"></i> Imprimir</button> 
</center>
<hooter>
</form>
</hooter>     
 </body>
 </html>
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