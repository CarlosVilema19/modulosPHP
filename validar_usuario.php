<?php
include 'conexion.php';
$usu_email=$_POST['email'];
$usu_contrasenia=$_POST['contrasenia'];

//$usu_email="carlos@gmail.com";
//$usu_contrasenia="12345";

$sentencia=$conexion->prepare("SELECT * FROM usuario WHERE email=? AND contrasenia=?");
$sentencia->bind_param('ss',$usu_email,$usu_contrasenia);
$sentencia->execute();

$resultado = $sentencia->get_result();
if ($fila = $resultado->fetch_assoc()) {
         echo json_encode($fila,JSON_UNESCAPED_UNICODE);     
}
$sentencia->close();
$conexion->close();
?>
