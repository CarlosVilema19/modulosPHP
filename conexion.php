<?php
$hostname='geolamserver.mysql.database.azure.com';
$database='geolamdb';
$username='geolamadmin';
$password='Riobamba2';

/*$hostname='localhost';
$database='geolam';
$username='root';
$password='';*/

$conexion=new mysqli($hostname,$username,$password,$database);
if($conexion->connect_errno){
    echo "El sitio web está experimentado problemas";
}
?>
