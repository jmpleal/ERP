<?php
/**
 * Created by PhpStorm.
 * User: manu
 * Date: 22/02/2018
 * Time: 12:01 PM
 */
session_start();
if (isset($_SESSION['username'])){
    //header('Status: 301 Moved Permanently', false, 301);
    header('Location: clientes.php');
    exit();

}
else{
    echo "tu no tienes acceso";
}
var_dump($_SESSION);