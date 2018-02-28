<?php
session_start();
include 'funciones.php';
verificar_secion();
validar_interaccion();
?>

<!DOCTYPE html>
<html lang="en">
<head>

    <link rel="stylesheet" type="text/css" href="../css/bootstrap.css">
    <link rel="stylesheet" type="text/css" href="../css/jquery.bootgrid.css">
    <link rel="stylesheet" type="text/css" href="../css/estilos.css">

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <script src="https://code.jquery.com/jquery-3.3.1.js"></script>
    <script src="../js/abcproductos.js"></script>
    <script src="../js/jquery.bootgrid.js"></script>

    <title class="icon-book">Reportes</title>
</head>
<body onload="startTime()" >

<header>

    <div CLASS="table-responsive" style=" color: white; border-style: solid;  padding-bottom: .5px; padding-left: .5px; padding-top: 1px;padding-right: 1px;">
        <div class="container">
            <br>
            <div class="float-sm-left">
                <a href="productos.php"><img class="erp zoom" src="../img/intelligent1.png" /></a>
            </div>
            <div class="float-sm-center"></div>
            <div class="align-content-center"> </div>
            <div class="columnaderecha">
                <div class="text-center"> <h7 class="text-center">  <?php echo "Hola Bienvenido: ".$_SESSION['username']."."?> </h7> </div>
                <div id="clockdate">
                    <div class="clockdate-wrapper">
                        <div id="clock"></div>
                        <div id="date"></div>
                    </div>
                </div>
            </div>

        </div>
    </div>
    <!-- MENU-->
    <div class="container">
        <nav class="nav-tabs">

            <ul class="align-items-center">
                <!--<li><a href="index.html"><span class="icon-home"></span>Inicio</a></li>-->
                <li class="zoomdos"><a href="clientes.php"><span class="icon-address-book zoom"></span>Clientes</a></li>
                <li class="zoomdos"><a href="productos.php"><span class="icon-book zoom"></span>Productos</a></li>
                <li class="zoomdos"><a href="ventas.php"><span class="icon-ventas zoom"></span>Punto de ventas</a></li>
                <li class="zoomdos"><a href="reportes.php"><span class="icon-reportes "></span>Reportes</a></li>
                <li class="zoomdos"><a href="salir.php"><span class="icon-salir "></span>Salir</a></li>
            </ul>


        </nav>
    </div>



</header>
<footer>
    <div style=" border-style: solid; padding: 10px;">

        <p>
            <a href=clientes.php></a>
            SISTEMA DESARROLLADO POR:
            <span>
    JMPEREZLEAL
  </span>
            &mdash;  2018-UNID &mdash;
        </p>


    </div>


</footer>

</body>
</html>