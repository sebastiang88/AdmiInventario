<?php include("../conexiones/db.php")  ?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Agregar Entrada</title>
    <link rel="stylesheet" type="text/css" href="../CSS/CSS44.css">
</head>
<body>
    <form action="../conexiones/enviardatosss.php" method="POST">
   <div class="forms">
      <fieldset>
      <center id="titulo">
    	<h2 style="color: rgb(255, 255, 255);">Agregar Entradas</h2>
     </center>
      <br>
      <FONT SIZE=+2>Factura Entrada:</FONT><br> <input class="input" type="text" name="FacturaEntrada">
      <br>
      <FONT SIZE=+2>Fecha Entrada:</FONT><br> <input class="input" type="date" name="FechaEntrada">
      <br>
      <FONT SIZE=+2>Hora Entrada:</FONT><br> <input class="input" type="time" name="HoraEntrada">
      <br>

    <center><FONT SIZE=+2> <a href="../HTML/RegistroEntrada.html"><button class="botontree" name="Agregar">Agregar</button></a>
    <a href="../HTML/RegistroEntrada.html"><button class="boton4">Cancelar</button></a>
    </center>
    <br>
    </fieldset>
    <br>
    </div>
    </form>
</body>
</html>