<?php include("../conexiones/db.php")  ?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Agregar Datos</title>
    <link rel="stylesheet" type="text/css" href="../CSS/CSS44.css">
</head>
<body>
  <form action="../conexiones/enviardatossssss.php" method="POST">

      <div class="forms">
      <fieldset>
      <center id="titulo">
    	<h2 style="color: rgb(255, 255, 255);">Agregar Salidas</h2>
     </center>
       <br>
       <FONT SIZE=+2>Factura Salida:</FONT><br>  <input class="input" type="text" name="FacturaSalidas">
      <br>
      <FONT SIZE=+2>Fecha Salida:</FONT><br>  <input class="input" type="date" name="FechaSalidas">
      <br>
      <FONT SIZE=+2>Hora Salida:</FONT><br>  <input class="input" type="time" name="HoraSalidas">
      <br>
      <FONT SIZE=+2>Estado:</FONT><br>  <input class="input" type="text" name="Estado">
     <br>
     <FONT SIZE=+2>Id Clientes:</FONT><br>
     <select class="paraco" name="IdCliente">
        <?php

         include("../conexiones/db.php");

         $consulta="SELECT * FROM clientes";
         $ejecutar=mysqli_query($conn,$consulta) or die(mysqli_error($conn));

        ?>

        <?php foreach ($ejecutar as $opciones): ?>
            <option value="<?php echo $opciones['IdCliente']?>"><?php echo $opciones['Nombre']?></option>  
        <?php endforeach ?>

                           
      </select>
     <br>

    <center><FONT SIZE=+2><a href="../HTML/RegistroSalidas.html"><button class="botontree" name="Agregar">Agregar</button></a>
    <a href="../HTML/RegistroSalidas.html"><button class="boton4">Cancelar</button></a>
    </center>
    <br>
    </fieldset>
    </div>
    </form>
</body>
</html>