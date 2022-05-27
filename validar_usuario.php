<?php
include 'conexion.php';
$usu_usuario=$_POST['usuario'];
$usu_password=$_POST['password'];

//$usu_usuario="carlos@gmail.com";
//$usu_password="12345";

$sentencia=$conexion->prepare("SELECT * FROM usuario WHERE email=? AND contrasenia=?");
$sentencia->bind_param('ss',$usu_usuario,$usu_password);
$sentencia->execute();

$resultado = $sentencia->get_result();
if ($fila = $resultado->fetch_assoc()) {
         echo json_encode($fila,JSON_UNESCAPED_UNICODE);     
}
$sentencia->close();
$conexion->close();
?>