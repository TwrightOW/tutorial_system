<?php 
// Llamamos a la conexión de la base de datos
include ("conexion.php");
// Validamos que el formulario y que el boton login haya sido presionado
if(isset($_POST['login'])){
// Obtener los valores enviados por el formulario
$usuario_es = $_POST['user_es'];
$contraseña_es= $_POST['pass_es'];

// Ejecutamos la consulta a la base de datos utilizando la función mysqli_query
$sql = "SELECT * FROM user_student WHERE user_es= '$usuario_es' and pass_es= '$contraseña_es' ";
$resultado = mysqli_query($conexion, $sql);
$num_registros = mysqli_num_rows($resultado);
if ($num_registros != 0) {
    header('Location: http://localhost/tutorial_system/html/user/st/index_es.html');
} else {
    header('Location: http://localhost/tutorial_system/html/login_es.html?alert=error');
}
}

?>