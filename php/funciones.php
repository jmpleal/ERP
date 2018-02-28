<?php
/**
 * Created by PhpStorm.
 * User: manu
 * Date: 22/02/2018
 * Time: 12:53 PM
 */


function verificar_secion(){

    if (!isset($_SESSION['username'])){
        unset($_SESSION);
        header('Location: /erp/index.php');
        exit();
    }

}

function validar_interaccion()
{

    //sino, calculamos el tiempo transcurrido
    $fechaGuardada = $_SESSION["ultimoAcceso"];
    $ahora = date("Y-n-j H:i:s");
    $tiempo_transcurrido = (strtotime($ahora)-strtotime($fechaGuardada));

    //comparamos el tiempo transcurrido
    if($tiempo_transcurrido >= 300) {
        //si pasaron 10 minutos o más
        session_unset();//elimino la sesion
        session_destroy(); // destruyo la sesión
        header("Location: /erp/index.php"); //envío al usuario a la pag. de autenticación
        //sino, actualizo la fecha de la sesión
    }else {
        $_SESSION["ultimoAcceso"] = $ahora;

    }

}