<?php include("../conexiones/db.php")  ?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Agregar Factura</title>
    <link rel="stylesheet" type="text/css" href="../CSS/CSS44.css">
</head>
<body>
  <form action="../conexiones/enviardatosfactura.php" name="DetalleSalida" method="POST">

      <div class="forms">
      <fieldset>
      <center id="titulo">
    	<h2 style="color: rgb(255, 255, 255);">Agregar Detalle Salida</h2>
    </center>
      <br>
      <FONT SIZE=+2>Codigo Salidas:</FONT><br>
      <select class="paraco" name="IdSalidas">
        <?php

         include("../conexiones/db.php");

         $consulta="SELECT * FROM salidas";
         $ejecutar=mysqli_query($conn,$consulta) or die(mysqli_error($conn));

        ?>

        <?php foreach ($ejecutar as $opciones): ?>
            <option value="<?php echo $opciones['IdSalidas']?>"><?php echo $opciones['IdSalidas']?></option>  
        <?php endforeach ?>

                           
      </select>
      <br>
       <FONT SIZE=+2>Codigo Producto:</FONT><br>
      <select class="paraco" name="Codigo_Producto">
        <?php

         include("../conexiones/db.php");

         $consulta="SELECT * FROM productos";
         $ejecutar=mysqli_query($conn,$consulta) or die(mysqli_error($conn));

        ?>

        <?php foreach ($ejecutar as $opciones): ?>
            <option value="<?php echo $opciones['Codigo_Producto']?>"><?php echo $opciones['Nombre_Productos']?></option>  
        <?php endforeach ?>

                           
      </select>
      <br>
      <FONT SIZE=+2>Cantidad Salida:</FONT><br>  <input class="input"type="text" name="CantidadSalidaProductos">
      <br>
      <FONT SIZE=+2>Precio Salida:</FONT><br>  <input class="input" onblur="suma()" type="text" name="PrecioSalidaProductos">
      <br>
      <FONT SIZE=+2>ValorSalidaProducto:</FONT><br>  <input class="input"type="text" name="ValorSalidaProducto">

    <center><FONT SIZE=+2> <a href="RegistroFactura.html"><button class="botontree" name="Agregar">Agregar</button></a>
    <a href="RegistroFactura.html"><button class="boton4">Cancelar</button></a>
    </center>
    <br>
    </fieldset>
    </div>
    </form>
</body>
</html>
 
 <script>
function suma(){
        alert("hola");
        var cantidad = DetalleSalida.CantidadSalidaProductos.value;
        alert(cantidad);
        var unitario = DetalleSalida.PrecioSalidaProductos.value;
        alert(unitario);
        var total = parseInt(cantidad)*parseInt(unitario);
        alert(total);
        DetalleSalida.ValorSalidaProducto.value = total;

    }
</script>