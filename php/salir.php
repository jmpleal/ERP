<?php
/**
 * Created by PhpStorm.
 * User: manu
 * Date: 22/02/2018
 * Time: 12:44 PM
 */
session_start();
session_unset();
session_destroy();
header('Status: 301 Moved Permanently', false, 301);
header('Location: /erp/index.php');
exit();
?>