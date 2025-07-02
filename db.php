<?php 
$host = 'localhost';
$usuario = 'root';
$contraseña = '';
$bd = 'prueba_tecnica';


$conexion = new mysqli($host ,$usuario,$contraseña,$bd );

if ($conexion) {
    echo('conexion exitosa!');
}else{
    echo('algo salio mal!');
}


?>