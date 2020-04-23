<?php
$dbhost = "localhost";
$dbuser = "root";
$dbpass = "";
$dbname = "test";

$conn = mysqli_connect($dbhost,$dbuser,$dbpass,$dbname);
if (!$conn){
    die("No hay conexión con la base de datos: ".mysqli_connect_error());

}
session_start();
$usuario = $_POST["txtusuario"];
$password = $_POST["txtpass"];

$query = mysqli_query($conn,"SELECT * FROM login WHERE usuario='".$usuario."' and password = '".$password."'");
$nr = mysqli_num_rows($query);

if($nr == 1){
    $_SESSION['user']=$usuario;
    header("Location: home.php");
}
else if($nr == 0){
    echo '<script language="javascript">alert("Error en usuario o contraseña");</script>';

}

    ?>