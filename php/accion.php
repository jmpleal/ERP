<?php
/**
 * Created by PhpStorm.
 * User: manu
 * Date: 22/02/2018
 * Time: 11:16 AM
 */
include_once 'conexion.php';
session_start();

if (isset($_POST['submit'])){
    //$username= "jmpleal";
    //$password = "admin";
    $username = mysqli_real_escape_string($con,$_POST['user']);
    $password = mysqli_real_escape_string($con,$_POST['password']);

    //$username = $_POST['user'];
    //$password = $_POST['password'];


    if($_SERVER["REQUEST_METHOD"] == "POST") {

        //$nombre = $_POST['user'];
        //$pass = $_POST['password'];


        $sql = "SELECT id from unid.usuarios where usuario = '$username' and password = '$password'";
        $result = mysqli_query($con,$sql);


        $row = mysqli_fetch_array($result,MYSQLI_ASSOC);

        $count = mysqli_num_rows($result);

        if($count == 1) {

            $_SESSION['username'] = $username;

            $_SESSION["ultimoAcceso"] = date("Y-n-j H:i:s");
            $_SESSION['username'] = $username;
            header('Location: clientes.php');
            exit();


        }
        else{
            $resultado = "Error en el usuario o contraseña";
            header('Location: /erp/index.php');
            exit();
           //echo "<html><body><script type='javascript'>
             //      Alert('Usuario o correo mal escritos');
               // </script> </body></html>";

        }


}
else {


}
exit();
}
?>

