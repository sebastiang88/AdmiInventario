<?php include("../conexiones/db.php")  ?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Agregar Cliente</title>
    <link rel="stylesheet" type="text/css" href="../CSS/CSS44.css">
</head>
<body>
    <form action="../conexiones/enviardatoss.php" method="POST">

      <div class="forms">
      <fieldset>
      <center id="titulo">
    	<h2 style="color: rgb(255, 255, 255);">Agregar Cliente</h2></center>

      <br>
      <FONT SIZE=+2>Tipo Documento:</FONT><br><select class="paraco" name="Tipodocumento" id="Tip_doc">
        <option value="Tarjeta de identidad">Tarjeta de identidad</option>
        <option value="Cedula">Cedula</option>
        <option value="Cedula Extranjera">Cedula de extrajeria</option>
      </select>
    <br>
    <FONT SIZE=+2>N° de Documento:</FONT><br>  <input class="input" type="text" name="IdCliente">
    <br>
    <FONT SIZE=+2>Nombre:</FONT><br>  <input class="input" type="text" name="Nombre">
    <br>
    <FONT SIZE=+2>Apellido:</FONT><br>  <input class="input" type="text" name="Apellido">
    <br>
    <FONT SIZE=+2>Direccion:</FONT><br>  <input class="input" type="text" name="Direccion" placeholder="ej: cll 74 a # 08">
    <br>
    <FONT SIZE=+2>Email:</FONT><br>  <input class="input" type="email" name="Email" placeholder="ej: alguien@gmail.com"> 
    <br>
    <FONT SIZE=+2>Telefono:</FONT><br>  <input class="input" type="text" name="telefono" placeholder="Solo Numeros">
    <br>
 
    <center><FONT SIZE=+2> <a href="../HTML/RegistroClientes.html"><button class="botontree" name="Agregar">Agregar</button></a>
    <a href="../HTML/RegistroClientes.html"><button class="boton4">Cancelar</button></a>
    </center>
    <br>
    </fieldset>
    </div>
    </form>
</body>
</html>