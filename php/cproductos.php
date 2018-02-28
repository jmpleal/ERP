<?php
/**
 * Created by PhpStorm.
 * User: admin
 * Date: 01/02/2018
 * Time: 12:16 AM
 */
if ($_SERVER ['REQUEST_METHOD']=='GET'){

    //$seljs          = $_GET['seljs'];
    $updateidphp    = $_GET['updateidjs'];
    $matriculaphp   = $_GET['matriculajs'];
    $nombrephp      = $_GET['nombrejs'];
    $descripcionphp  = $_GET['descripcionjs'];
    $preciophp   = $_GET['preciojs'];


    require_once('conexion.php');



    if ( $matriculaphp == "" or $nombrephp == "" or $descripcionphp =="" or $preciophp ==""or $updateidphp=="" ) {

        echo "101";}

    else{

        $nombre = strtoupper($nombrephp);
        $descripcion = strtoupper($descripcionphp);

        $query = ("CALL unid.cproductos ('$updateidphp','$matriculaphp','$nombre','$descripcion','$preciophp','A');");

        if (mysqli_query($con, $query)) {
            echo "201";
        } else {
            echo "102";
        }

    }

}
