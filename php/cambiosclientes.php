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
    $appaternophp   = $_GET['appaternojs'];
    $apmaternophp   = $_GET['apmaternojs'];
    $direccionphp   = $_GET['direccionjs'];
    $edadphp        = $_GET['edadjs'];
    $emailphp       = $_GET['emailjs'];




    require_once('conexion.php');




    if ($matriculaphp == "" or $nombrephp == "" or $appaternophp =="" or $apmaternophp =="" or $direccionphp =="" or $edadphp =="" or $emailphp =="") {

        echo "101";}
    if ($updateidphp == ""){
        echo "101";}
        else{
            if (filter_var($emailphp, FILTER_VALIDATE_EMAIL)) {

                $nombre = strtoupper($nombrephp);
                $paterno = strtoupper($appaternophp);
                $apmaterno = strtoupper($apmaternophp);
                $direccion = strtoupper($direccionphp);
                $email = strtoupper($emailphp);

                $query = ("CALL abcclientes (2,'$updateidphp','$matriculaphp','$nombre','$paterno','$apmaterno','$direccion', '$edadphp','$email','A');");

                if (mysqli_query($con, $query)) {
                    echo "201";
                } else {
                    echo "102";
                }

            }
            else{
                echo "103";
            }
        }

}
