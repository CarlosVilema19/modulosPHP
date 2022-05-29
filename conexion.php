<?php
$hostname='localhost';
$database='geolamdb';
$username='superuser@geolamadmin';
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
