<?php include("../conexiones/db.php")  ?>
<?php

session_start();

$varsesion = $_SESSION['user_id'];
/*$sql1 = "select niveles.Nivel from usuarios INNER JOIN niveles on usuarios.Nivel = niveles.Nivel where usuarios.email = '$varsesion'";
$rs1 = mysqli_query($conn,$sql1);
$arreglo1 = mysqli_fetch_row($rs1);

if ($arreglo1[0] != 1) {
    echo "USTED NO TIENE AUTORIZACION";
die();
}*/
?>
<!DOCTYPE 
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, inicial-scale=1.0">
    <title>Registros</title>

    <link rel="stylesheet"  href="../CSS/CSS2.css">

  <script src="https://kit.fontawesome.com/bebb1cef09.js" crossorigin="anonymous"></script>
</head>
<body id="body">

   <header>
       <div class="icon__menu">
          <i class="fas fa-bars" id="btn_open"></i>
       </div>
    <h1 class="lol">Bienvenido</h1>
   </header>

   <div class="menu__side" id="menu_side">

       <div class="name__page">
            <i class="fa-solid fa-user"></i>
            <h4>Surtidora De Aves 22</h4>
      </div>
    
       <div class="options__menu">

        
          <a href="../HTML/RegistrosEmpleados.php" target="marco">
               <div class="option">
                   <i class="fa-regular fa-address-card" title="Empleados"></i>
                   <h4>Empleados</h4>
              </div>
           </a>
   
            <a href="../HTML/RegistroClientes.php" target="marco">
             <div class="option">
                 <i class="fas fa-child" title="Clientes"></i>
                  <h4>Clientes</h4>
               </div>
            </a>
  

            <a href="../HTML/RegistrosProveedores.php"target="marco">
              <div class="option">
                <i class="fa-solid fa-truck" title="Proveedores"></i>
               <h4>Proveedores</h4>
               </div>
          </a>
    

          <a href="../HTML/RegistroProductos.php" target="marco">
              <div class="option">
                  <i class="fa-solid fa-cart-shopping"  title="Productos"></i>
                  <h4>Productos</h4>
               </div>
           </a> 


            <a href="../HTML/RegistroEntrada.php" target="marco">
               <div class="option">
                <i class="fas fa-angle-left" title="Entradas"></i>
                   <h4>Entradas</h4>
                </div>
            </a>

            <a href="../HTML/RegistroSalidas.php" target="marco">
                <div class="option">
                     <i class="fas fa-angle-right" title="Salidas"></i>
                     <h4>Salidas</h4>
               </div>
            </a>

           <a href="../HTML/RegistroFactura.php"target="marco">
             <div class="option">
                 <i class="far fa-clipboard" title="Detalle Salida"></i>
                 <h4>Detalle Salida</h4>
              </div>
             </a>
        
           <a href="../HTML/RegistroDetalle.php" target="marco">
                <div class="option">
                    <i class="fas fa-barcode"  title="Detalle Entrada"></i>
                   <h4>Detalle Entrada</h4>
               </div>
            </a>

            <a href="../HTML/ModificarADMI.php" target="marco">
                <div class="option">
                    <i class="fas fa-chalkboard-teacher" title="Registrar"></i>
                   <h4>Registrar Usuarios</h4>
               </div>
            </a>

            <a href="../HTML/Reportestotal.html" target="marco">
               <div class="option">
                <i class="fas fa-file-download" title="Imprimir Reportes"></i>
                  <h4>Reportes</h4>
                </div>
            </a>

            <a href="../HTML/Manual.html" class="selected" target="marco">
               <div class="option">
                   <i class="fas fa-file-alt" title="Manual del Usuario"></i>
                   <h4>Manual del Usuario</h4>
              </div>
           </a>

            <a href="../login/Inicio Sesion.php">
               <div class="option">
                <i class="fas fa-sign-in-alt" title="Cerrar Sesion"></i>
                  <h4>Cerrar Sesión</h4>
                </div>
            </a>
       </div> 
    </div> 

    <main>
        
        <iframe name="marco" frameborder="0" width="100%" height="130%" margin_left="0" src=""></iframe>
           
    </main>

    <script src="../JS/script.js"></script>

</body>
</html>