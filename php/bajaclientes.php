<?php
/**
 * Created by PhpStorm.
 * User: admin
 * Date: 01/02/2018
 * Time: 05:39 PM
 */
if ($_SERVER ['REQUEST_METHOD']=='GET'){

    //$seljs          = $_GET['seljs'];
    $updateidphp    = $_GET['updateidjs'];





    require_once('conexion.php');

    if ( $updateidphp == ""){

        echo "101";
    }

    else {
        $query = ("CALL `unid`.`bclientes`($updateidphp);");


        if (mysqli_query($con, $query)) {
            echo "201";
        } else {
            echo "102";
        }

    }
}
