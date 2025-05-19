<?php include("../conexiones/db.php")  ?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Agregar Proveedor</title>
    <link rel="stylesheet" type="text/css" href="../CSS/CSS44.css">
</head>
<body>
  <form action="../conexiones/enviardatosssss.php" method="POST">

      <div class="forms">
      <fieldset>

    <center id="titulo">
    	<h2 style="color:  rgb(255, 255, 255);">Agregar Proveedor</h2>
    </center>

      <br>
      <FONT SIZE=+2>Numero documento:</FONT><br> <input class="input" type="text" name="idproveedor">
      <br>
      <FONT SIZE=+2>Codigo:</FONT><br>  <input class="input" type="text" name="Cod_Proveedor">
      <br>
      <FONT SIZE=+2>Nombre:</FONT><br>  <input class="input" type="text" name="Nombre">
      <br>
      <FONT SIZE=+2>Apellido:</FONT><br>  <input class="input" type="text" name="Apellido">
    <br>
    <FONT SIZE=+2>Telefono: </FONT><br> <input class="input" type="text" name="telefono" placeholder="Solo Numeros">
    <br>
    <FONT SIZE=+2>Email:</FONT><br>  <input class="input" type="text" name="email" placeholder="ej: Surti22@gmail.com">
    <br>
    <FONT SIZE=+2>Nombre empresa:</FONT><br>  <input class="input" type="text" name="Nombre_Empresa">
    <br>
    <FONT SIZE=+2>Dir.empresa:</FONT><br>  <input class="input" type="text" name="direccion_Empresa" placeholder="ej: cll 74 a # 08">
    <br>
 
    <center><FONT SIZE=+2><a href="../HTML/RegistrosProveedores.html"><button class="botontree" name="Agregar">Agregar</button></a>
    <a href="../HTML/RegistrosProveedores.html"><button class="boton4">Cancelar</button></a>
    </center>
    <br>
    </fieldset>
    </div>
    </form>
</body>
</html>