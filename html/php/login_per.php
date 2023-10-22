<?php
// Llamamos a la conexión de la base de datos
include("conexion.php");

// Validamos que el formulario y que el botón login haya sido presionado
if (isset($_POST['login'])) {
    // Obtener los valores enviados por el formulario
    $usuario_es = $_POST['user_em'];
    $contraseña_es = $_POST['pass_em'];

    // Ejecutamos la consulta a la base de datos utilizando la función mysqli_query
    $sql = "SELECT * FROM user_employee WHERE user_em = '$usuario_es' AND pass_em = '$contraseña_es'";
    $resultado = mysqli_query($conexion, $sql);
    $num_registros = mysqli_num_rows($resultado);

    if ($num_registros != 0) {
        // Inicio de sesión exitoso
        $row = mysqli_fetch_assoc($resultado);
        $rol_em = $row['rol_em'];
//Verifica que tipo de rol tiene el empleado  y lo envia a una pagina dependiendo del tipo
        switch ($rol_em) {
            case 1:
                header('Location: http://localhost/tutorial_system/html/user/pr/cot/index_cot.html');
                break;
            case 2:
                header('Location:http://localhost/tutorial_system/html/user/pr/coc/index_coc.html');
                break;
            case 3:
                header('Location: http://localhost/tutorial_system/html/user/pr/tut/index_tut.html');
                break;
				case 5:
					header('Location: http://localhost/tutorial_system/html/user/pr/sec/index_sec.html');
					break;
            default:
                // si ningun dato coincide se queda en la pagina de login
                header('http://localhost/tutorial_system/html/login_per.html');
        }
    } else {
        // Credenciales inválidas
        header('Location: http://localhost/tutorial_system/html/login_per.html?alert=error');
    }
}
?>
