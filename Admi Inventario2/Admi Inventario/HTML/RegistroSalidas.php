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