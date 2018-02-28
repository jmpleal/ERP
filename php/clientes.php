<?php
session_start();
include 'funciones.php';
verificar_secion();
validar_interaccion();
?>

<!DOCTYPE html>
<html lang="en" xmlns="http://www.w3.org/1999/html">
<head>

    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" href="../css/bootstrap.css">
    <link rel="stylesheet" type="text/css" href="../css/jquery.bootgrid.css">
    <link rel="stylesheet" type="text/css" href="../css/estilos.css">

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <script src="https://code.jquery.com/jquery-3.3.1.js"></script>
    <script src="../js/abcclientes.js"></script>
    <script src="../js/jquery.bootgrid.js"></script>
    <script src="../js/jquery.bootgrid.min.js"></script>
    <script src="../js/jquery.bootgrid.fa.js"></script>
    <script src="../js/jquery.bootgrid.fa.min.js"></script>
    <script src="../js/colResizable-1.6.js"></script>
    <script src="../js/colResizable-1.6.min.js"></script>

    <title class="icon-book">Clientes</title>
</head>

<body onload="startTime()">
<div id="imagefont"></div>

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

<!-- Begin page content -->

<label class="card-subtitle"; >FORMULARIO DE CLIENTES</label>

<div class=" container card-columns nav-tabs">


    <div class="form-group"> <!-- Nombre -->
        <label for="nombre" class="control">Nombre</label>
        <input class="form-control"  tabindex="1" id="nombre" name="nombre" title="Ingresa el o los Nombres del Cliente" type="text">
    </div><div class="form-group"> <!-- edad-->
        <label for="edad" class="control">Edad</label>
        <input class="form-control" tabindex="4" id="edad" name="edad" title="Ingresa solo Numero para tu edad" type="text">
    </div><div class="form-group"> <!-- email-->
        <label for="email" class="control">Email</label>
        <input class="form-control" tabindex="7" id="email" name="email" title="Ingresa tu email correctamente" type="text">
    </div>

    <div class="form-group"> <!-- sp paterno -->
        <label for="paterno" class="control">Apellido Paterno </label>
        <input class="form-control" tabindex="2" id="paterno" name="paterno" title="Ingresa solo el apellido Paterno" type="text">
    </div><div class="form-group"><!--!--

            <br--><!-- Matricula-->
        <label for="matricula" id="clave" class="control">Clave</label>
        <input class="form-control" tabindex="5" id="matricula" name="int" title="Ingresa la Clave numerica" type="number">
    </div><div class="form-group"> <!-- ID ACTUALIZAR-->
        <label for="id" class="control">ID </label>
        <input class="form-control" tabindex="8" id="id" name="ID" title="Ingresa solo el ID" type="number">
    </div><div class="form-group"> <!-- ap materno -->
        <label for="materno" class="control">Apellido Materno</label>
        <input class="form-control" tabindex="3" id="materno" name="materno" title="Ingresa solo el apellido Materno" type="text">
    </div>

    <div class="form-group"> <!-- direccion-->
        <label for="direccion" class="control">Direccion</label>
        <input class="form-control" tabindex="6" id="direccion" name="direccion" title="Ingresa tu direccion Calle/Numero/Colonia/Ciudad/Estado" type="text">
    </div>



    <div class="card-columns "> <!-- Submit Button-->
        <input id="btn001" class="botonalta" title="Guardar" type="button">
        <input id="btn002" class="botonactualiza" title="Actualizar" type="button">
        <input id="btn0010" class="botonbaja" title="Cambiar estatus a Baja" type="button">

    </div>
    <br>


</div>
<BR>
<label class="card-subtitle"; >REGISTROS DE CLIENTES</label>
<br>

<div class="container table-responsive-xl">
    <table id="bootgrid"  width="100%" class="table container table-hover">

        <thead >
        <tr>
            <th data-column-id="id" data-type="numeric" data-order="desc">ID</th>
            <th data-column-id="clave">CLAVE</th>
            <th data-column-id="nombre">NOMBRE</th>
            <th data-column-id="appaterno">A. PATERNO</th>
            <th data-column-id="apmaterno" data-type="numeric">A. MATERNO</th>
            <th data-column-id="direccion">DIRECCION</th>
            <th data-column-id="edad" data-type="numeric">EDAD</th>
            <th data-column-id="email" data-type="numeric">EMAIL</th>
            <th data-column-id="estatus">ESTADO</th>
            <th data-column-id="commands" data-formatter="commands" data-sortable="true">ACCIONES</th>
        </tr>
        </thead>
    </table>
</div>


<br>
<footer>
    <div style=" border-style: solid; padding: 10px;">

        <p>
            <a href=clientes.php></a>
            SISTEMA DESARROLLADO POR:
            <span>
    JUAN MANUEL PEREZ LEAL
  </span>
            &mdash;  2018-UNID &mdash;
        </p>


    </div>

</footer>

</body>

</html>






