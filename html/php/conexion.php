<?php 
//Variables del servidor de la base de datos
$servername = "localhost";
$username = "root";
$password = "";
$database = "tutorial_system";
// Creando conexión con la Base de datos
$conexion = mysqli_connect($servername, $username, $password, $database);
// Comprobación si la conexion es exitosa 
if ($conexion) {
    echo 'Conectado a la base de datos ';
   
}else
    echo 'No se ha podido conectar a la base de datos';
    
?>