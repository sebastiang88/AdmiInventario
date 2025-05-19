<?php include("../conexiones/db.php")  ?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Agregar Datos</title>
    <link rel="stylesheet" type="text/css" href="../CSS/CSS44.css">
</head>
<body>
   <form action="../conexiones/enviardatos2.php" name="detalleentrada" method="POST">
      <div class="forms">
      <fieldset>
      <center id="titulo">
    	<h2 style="color: rgb(255, 255, 255);">Agregar Datalle de Entrada</h2>
     </center>
      <br>
      
      <FONT SIZE=+2>Codigo Entrada:</FONT><br>
      <select class="paraco" name="id_Entrada">
        <?php

         include("../conexiones/db.php");

         $consulta="SELECT * FROM entradas";
         $ejecutar=mysqli_query($conn,$consulta) or die(mysqli_error($conn));

        ?>

        <?php foreach ($ejecutar as $opciones): ?>
            <option value="<?php echo $opciones['id_Entrada']?>"><?php echo $opciones['id_Entrada']?></option>  
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
      <FONT SIZE=+2>Cantidad:</FONT><br>  <input class="input" type="text" name="CantidadEntradaProducto">
      <br>
      <FONT SIZE=+2>Precio:</FONT><br>  <input class="input" onblur="suma()" type="text" name="PrecioEntradaProducto">
      <br>
      <FONT SIZE=+2>Valor:</FONT><br>  <input class="input" type="text" name="ValorEntradaProducto">
    <br>

    <center><FONT SIZE=+2><a href="RegistroDetalle.html"><button class="botontree" name="Agregar">Agregar</button></a>
    <a href="RegistroDetalle.html"><button class="boton4">Cancelar</button></a>
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
        var cantidad = detalleentrada.CantidadEntradaProducto.value;
        alert(cantidad);
        var unitario = detalleentrada.PrecioEntradaProducto.value;
        alert(unitario);
        var total = parseInt(cantidad)*parseInt(unitario);
        alert(total);
        detalleentrada.ValorEntradaProducto.value = total;

    }
</script>