<?php
session_start();

// Verificamos si la sesión está establecida
if (isset($_SESSION['id_es'])) {
    // Llamamos a la conexión de la base de datos
    include("conexion.php");

    // Obtenemos el ID del estudiante desde la sesión
    $id_estudiante = $_SESSION['id_es'];

    // Consultamos la base de datos para obtener el nombre del estudiante
    $sql = "SELECT nombre FROM user_student WHERE id_es = '$id_estudiante'";
    $resultado = mysqli_query($conexion, $sql);

    if ($resultado && mysqli_num_rows($resultado) > 0) {
        $row = mysqli_fetch_assoc($resultado);
        $nombre_estudiante = $row['nombre'];

        // Mostramos el nombre del estudiante en la página
        echo "Bienvenido, $nombre_estudiante";
    } else {
        // No se encontró el estudiante en la base de datos
        echo "Bienvenido Estudiante";
    }
} else {
    // Si la sesión no está establecida, redirige al usuario al inicio de sesión
    header('Location: http://localhost/tutorial_system/html/login_es.html');
}
?>
