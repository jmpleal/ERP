<?php
/**
 * Created by PhpStorm.
 * User: admin
 * Date: 25/01/2018
 * Time: 04:29 PM
 */
define('HOST','127.0.0.1');
define('USER','root');
define('PASS','');
define('DB','unid');

$con = mysqli_connect(HOST, USER, PASS, DB)
    or die ('Unable to Connect');

?>