<?php
require_once "Clases/Usuario.php";

$mensaje = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nombre = trim($_POST['nombre']);
    $apellidos = trim($_POST['apellidos']);
    $correo = trim($_POST['correo']);
    $usuario = trim($_POST['usuario']);
    $password = $_POST['password'];
    $repite_password = $_POST['repite_password'];

    if ($password !== $repite_password) {
        $mensaje = "<p style='color: red; text-align: center; font-weight: bold;'>Las contraseñas no coinciden.</p>";
    } else {
        $usuarioObj = new Usuario();
        
        if ($usuarioObj->registrar($nombre, $apellidos, $usuario, $correo, $password)) {
            $mensaje = "<p style='color: green; text-align: center; font-weight: bold;'>¡Registro exitoso! Ya puedes <a href='login.php'>iniciar sesión</a>.</p>";
        } else {
            $mensaje = "<p style='color: red; text-align: center; font-weight: bold;'>Error al registrar. Es posible que el correo o usuario ya estén en uso.</p>";
        }
    }
}
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registrar usuario</title>
    <link rel="stylesheet" href="css/estilos.css">
</head>
<body>

    <div class="registro-card">
        <h2>Registrar usuario</h2>
        <p class="subtitulo">Todos los campos marcados con * son obligatorios.</p>
        
        <?php echo $mensaje; ?>

        <form action="registro.php" method="POST">
            <!-- Datos personales -->
            <fieldset>
                <legend>Datos personales</legend>
                
                <div class="campo-grupo">
                    <label for="nombre">Nombre: *</label>
                    <input type="text" id="nombre" name="nombre" required>
                </div>

                <div class="campo-grupo">
                    <label for="apellidos">Apellidos: *</label>
                    <input type="text" id="apellidos" name="apellidos" required>
                </div>

                <div class="campo-grupo">
                    <label for="correo">Correo electrónico: *</label>
                    <input type="email" id="correo" name="correo" required>
                </div>
            </fieldset>

            <!-- Datos de la cuenta -->
            <fieldset>
                <legend>Datos de la cuenta</legend>
                
                <div class="campo-grupo">
                    <label for="usuario">Nombre de usuario: *</label>
                    <input type="text" id="usuario" name="usuario" required>
                </div>

                <div class="campo-grupo">
                    <label for="password">Contraseña: *</label>
                    <input type="password" id="password" name="password" required>
                </div>

                <div class="campo-grupo">
                    <label for="repite_password">Repite la contraseña: *</label>
                    <input type="password" id="repite_password" name="repite_password" required>
                </div>

                <div style="margin-top: 12px; font-size: 13px; display: flex; align-items: center; gap: 6px;">
                    <input type="checkbox" id="mostrarPassword" onclick="togglePassword()" style="width: auto; margin: 0;">
                    <label for="mostrarPassword" style="display: inline; cursor: pointer; margin-bottom: 0;">Mostrar contraseñas</label>
                </div>
            </fieldset>

            <div class="botones-contenedor">
                <button type="submit" class="btn-registrar">Registrarme</button>
                <button type="reset" class="btn-limpiar">Limpiar</button>
            </div>
        </form>
        
        <div class="footer-link">
            ¿Ya tienes cuenta? <a href="login.php">Inicia sesión</a>.
        </div>
    </div>

    <script>
        function togglePassword() {
            const pass1 = document.getElementById('password');
            const pass2 = document.getElementById('repite_password');
            const tipo = pass1.type === 'password' ? 'text' : 'password';
            
            pass1.type = tipo;
            pass2.type = tipo;
        }
    </script>
</body>
</html>