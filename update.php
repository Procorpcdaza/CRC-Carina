<?php
require 'conexion.php';

//Key_N, Nombre, num_pasaporte, Real_N, CRC_N, Password_MJP, Fecha_Rad_MJP

$Key_N = $_POST["Key_N"];
$Nombre = $_POST["Nombre"];
$num_pasaporte = $_POST["num_pasaporte"];
$Fecha_Rad_MJP = $_POST["Fecha_Rad_MJP"];
$Real_N = $_POST["Real_N"];
$CRC_N = $_POST["CRC_N"];
$Password_MJP = $_POST["Password_MJP"];
//echo $Key_N;

$sql = "UPDATE portugal SET Nombre = '$Nombre', num_pasaporte = '$num_pasaporte', Fecha_Rad_MJP = '$Fecha_Rad_MJP', Real_N ='$Real_N', CRC_N = '$CRC_N', Password_MJP ='$Password_MJP' WHERE Key_N = '$Key_N'";

$resultado = $mysqli->query($sql);

if($resultado){
    header("location: index.php");
}

?>