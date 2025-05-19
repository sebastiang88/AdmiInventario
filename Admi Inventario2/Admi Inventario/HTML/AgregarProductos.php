<?php include("../conexiones/db.php")  ?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Agregar Prodcutos</title>
    <link rel="stylesheet" type="text/css" href="../CSS/CSS44.css">
</head>
<body>
    <form action="../conexiones/enviardatossss.php" method="POST">

    <div class="forms">
    <fieldset>
    <center id="titulo">
    	<h2 style="color: rgb(255, 255, 255);">Agregar Productos</h2>
    </center>

      <br>
      <FONT SIZE=+2>Nombre:</FONT><br> <input class="input" type="text" name="Nombre_Productos">
      <br>
      <FONT SIZE=+2>Detalle Productos:</FONT><br> <input class="input" type="text" name="Detalle_Productos">
      <br>
      <FONT SIZE=+2>valor unitario:</FONT><br> <input class="input" type="text" name="valor_unitario">
      <br>
      <FONT SIZE=+2>idproveedor:</FONT><br>
      <select class="paraco" name="idproveedor">
        <?php

         include("../conexiones/db.php");

         $consulta="SELECT * FROM proveedores";
         $ejecutar=mysqli_query($conn,$consulta) or die(mysqli_error($conn));

        ?>

        <?php foreach ($ejecutar as $opciones): ?>
            <option value="<?php echo $opciones['idproveedor']?>"><?php echo $opciones['Nombre']?></option>  
        <?php endforeach ?>

                           
      </select>
      <br>

      <FONT SIZE=+2>Vencimiento:</FONT><br> <input class="input" type="date" name="Vencimiento">
      
    <center><FONT SIZE=+2> <a href="../HTML/RegistroProductos.html"><button class="botontree" name="Agregar">Agregar</button></a>
    <a href="../HTML/RegistroProductos.html"><button class="boton4">Cancelar</button></a>
    </center>
    <br>
    </fieldset>
    <br>
    </div>
    </form>
</body>
</html>




