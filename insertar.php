<?php

$conexion =mysqli_connect('geolamserver.mysql.database.azure.com','geolamadmin','Riobamba2','geolamdb');
//$conexion =mysqli_connect('localhost','root','','geolam');

if(!$conexion)
{
    echo "error en conexion";
}

$email =$_POST['email'];
$nombre_usuario =$_POST['nombre_usuario'];
$contrasenia =$_POST['contrasenia'];


$query = "INSERT INTO usuario (email,id_tipo_usuario,nombre_usuario,contrasenia) values ('$email','1','$nombre_usuario','$contrasenia')";
//$query = "INSERT INTO usuario (email,id_tipo_usuario,nombre_usuario,contrasenia) values ('pedro@gmail.com','1','pedro','12345')";
$resultado = mysqli_query($conexion,$query);

if($resultado)
{
    echo "registro correcto";
}else{
    echo "error";
}

?>
