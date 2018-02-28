<?php
session_start();
include 'funciones.php';
verificar_secion();
validar_interaccion();
?>
<!DOCTYPE html>
<html lang="en" xmlns="http://www.w3.org/1999/html">
<head>

    <link rel="stylesheet" type="text/css" href="../css/bootstrap.css">
    <link rel="stylesheet" type="text/css" href="../css/jquery.bootgrid.css">
    <link rel="stylesheet" type="text/css" href="../css/estilos.css">

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <script src="https://code.jquery.com/jquery-3.3.1.js"></script>
    <script src="../js/abcproductos.js"></script>
    <script src="../js/jquery.bootgrid.js"></script>
    <script src="../js/jquery.bootgrid.min.js"></script>
    <script src="../js/jquery.bootgrid.fa.js"></script>
    <script src="../js/jquery.bootgrid.fa.min.js"></script>
    <script src="../js/colResizable-1.6.js"></script>
    <script src="../js/colResizable-1.6.min.js"></script>

    <title class="icon-book">Productos</title>
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

<label class="card-subtitle"; >FORMULARIO DE PRODUCTOS</label>
<br>


<div class=" container card-columns nav-tabs">

    <form class="fomulario">
        <div class="form-group">
            <!-- Matricula-->
            <label for="matricula" id="clave" class="control">Clave</label>
            <input type="number"  tabindex="1" class="form-control" id="matricula" name="int" title="Ingresa la Clave numerica" >
        </div>
        <div class="form-group"> <!-- sp paterno -->
            <label for="descripcion" class="control">Descripcion</label>
            <textarea rows="1" type="text" tabindex="4" class="form-control" id="descripcion" name="paterno" title="Ingresa la Descripcion del producto"></textarea>

        </div>

        <div class="form-group"> <!-- Nombre -->
            <label for="nombre" class="control">Nombre</label>
            <input type="text" tabindex="2" class="form-control" id="nombre" name="nombre" title="Ingresa el o los Nombres del Producto">
        </div>


        <div class="form-group"> <!-- ID ACTUALIZAR-->
            <label for="id" class="control">ID </label>
            <input type="number" tabindex="5" class="form-control" id="id" name="ID" title="Ingresa solo el ID" >
        </div>
        <br>
        <div class="form-group"> <!-- ap materno -->
            <label for="precio" class="control">Precio</label>
            <input type="number" tabindex="3" class="form-control" id="precio" name="materno" title="Ingresa la Cantidad del Precio">
        </div>

        <br>



        <div class="card-columns "> <!-- Submit Button-->
            <input id="btn001"  type="button" class="botonalta" title="Guardar"/>
            <input id="btn002"  type="button" class="botonactualiza" title="Actualizar"/>
            <input id="btn0010"  type="button" class="botonbaja" title="Cambiar estatus a Baja"/>
        </div>
        <br>



    </form>




</div>
<BR>
<label class="card-subtitle"; >REGISTRO DE PRODUCTOS</label>
<br>

<div class="container table-responsive-xl">
    <table id="bootgrid" class="table container table-hover">

        <thead >
        <tr>
            <th data-column-id="id" data-type="numeric" data-order="desc">ID</th>
            <th data-column-id="clave">CLAVE</th>
            <th data-column-id="nombre">NOMBRE</th>
            <th data-column-id="desc_producto">DESCRIPCION</th>
            <th data-column-id="precio">PRECIO</th>
            <th data-column-id="estado">ESTADO</th>
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






