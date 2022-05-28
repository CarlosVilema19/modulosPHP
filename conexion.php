<?php
$hostname='geolamserver.mysql.database.azure.com';
$database='geolamdb';
$username='azure_superuser@geolamadmin';
$password='Riobamba2';

$conexion=new mysqli($hostname,$username,$password,$database);
if($conexion->connect_errno){
    echo "El sitio web está presentando problemas";
}
?>
