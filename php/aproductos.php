<?php
/**
 * Created by PhpStorm.
 * User: admin
 * Date: 25/01/2018
 * Time: 04:29 PM
 */

if ($_SERVER ['REQUEST_METHOD']=='GET'){


    $matriculaphp = $_GET['matriculajs'];
    $nombrephp = $_GET['nombrejs'];
    $preciophp = $_GET['preciojs'];
    $descripcionphp = $_GET['descripcionjs'];


    require_once('conexion.php');

    if ( $matriculaphp == "" or $nombrephp == "" or $preciophp =="" or $descripcionphp =="" ) {


        echo "101";}
   else {

        $nombre = strtoupper($nombrephp);
        $descripcion = strtoupper($descripcionphp);

        $query = ("CALL aproductos ('0','$matriculaphp','$nombre','$descripcion','$preciophp','A');");


        if (mysqli_query($con, $query)) {
            echo "201";
        } else {
            echo "102";
        }

    }





}
?>