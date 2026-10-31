<?php
session_start();
require_once "Clases/Usuario.php";

$mensaje = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $correo = trim($_POST['correo']);
    $password = trim($_POST['password']);

    $usuarioObj = new Usuario();
    $resultado = $usuarioObj->login($correo, $password);

    if ($resultado) {
        $_SESSION['usuario_id'] = $resultado['id'];
        $_SESSION['nombre'] = $resultado['nombre'];
        $_SESSION['correo'] = $resultado['correo'];

        // Redirección directa a index.php en la raíz
        header("Location: index.php");
        exit();
    } else {
        $mensaje = "<p style='color: red; text-align: center;'>Correo o contraseña incorrectos.</p>";
    }
}
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Iniciar Sesión</title>
    <link rel="stylesheet" href="css/estilos.css">
</head>
<body>
    <div style="max-width: 350px; margin: 60px auto; padding: 25px; border: 1px solid #ccc; border-radius: 8px; font-family: Arial, sans-serif;">
        <h2 style="text-align: center; margin-bottom: 20px;">Iniciar Sesión</h2>
        
        <?php echo $mensaje; ?>

        <form action="login.php" method="POST">
            <div style="margin-bottom: 15px;">
                <label for="correo">Correo electrónico:</label><br>
                <input type="email" id="correo" name="correo" required style="width: 100%; padding: 8px; margin-top: 5px; box-sizing: border-box;">
            </div>

            <div style="margin-bottom: 20px;">
                <label for="password">Contraseña:</label><br>
                <input type="password" id="password" name="password" required style="width: 100%; padding: 8px; margin-top: 5px; box-sizing: border-box;">
            </div>

            <button type="submit" style="width: 100%; padding: 10px; background-color: #007bff; color: white; border: none; border-radius: 4px; cursor: pointer; font-size: 16px;">
                Entrar
            </button>
        </form>
        
        <p style="margin-top: 20px; text-align: center; font-size: 14px;">
            ¿No tienes cuenta? <a href="registro.php">Regístrate aquí</a>
        </p>
    </div>
</body>
</html>