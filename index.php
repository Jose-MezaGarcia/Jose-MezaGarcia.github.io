<?php
session_start();

// Si el usuario NO ha iniciado sesión, lo mandamos al login
if (!isset($_SESSION['usuario_id'])) {
    header("Location: login.php");
    exit();
}
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mi Sitio Web</title>
    <link rel="stylesheet" href="css/estilos.css">
</head>
<body>

    <nav>
        <a href="index.php">Inicio</a> | 
        <a href="autobiografia.php">Autobiografía</a> | 
        <a href="galery.php">Museo</a> | 
        <a href="contacto.php">Contacto</a> | 
        <a href="herramientas.php">Herramientas</a> |
        <a href="misperros.php">Mis Perros</a> |
        <a href="logout.php" style="color: red;">Cerrar Sesión</a>
    </nav>

    <!-- Saludo al usuario autenticado -->
    <div style="margin: 15px 0;">
        <h2>¡Bienvenido, <?php echo htmlspecialchars($_SESSION['nombre']); ?>!</h2>
    </div>

    <div id="reloj" style="background-color: #f2f2f2; padding: 10px; margin-bottom: 15px; border: 1px solid #ccc; font-weight: bold;">
        Cargando fecha y hora...
    </div>

    <h1>Bienvenido a mi Primera Página Web</h1>

    <p>HOLAAAAAA my people este es mi primera pagina que te dijera y agregue unas imagenes, pero les cometo que dificil fue poner la imagen de la web.</p>

    <div>
        <img src="Fotos/mifoto.jpg" alt="Imagen 1" style="max-width: 300px; display: block; margin-bottom: 10px;">

        <!-- Esta imagen es desde la web -->
        <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcS1SmLykQZ8gdj9Bqk0NIL_wKvuwOX_kgFQscHJKFBWhRdm6b2vI9Y_OVZs&s=10" alt="Imagen 2" style="max-width: 300px;">
    </div>

    <script>
        function mostrarFechaHora() {
            let reloj = document.getElementById('reloj');
            if (reloj) {
                let fecha = new Date();
                reloj.innerHTML = "Hoy es: " + fecha.toLocaleString('es-MX', { 
                    weekday: 'long', 
                    year: 'numeric', 
                    month: 'long', 
                    day: 'numeric', 
                    hour: '2-digit', 
                    minute: '2-digit', 
                    second: '2-digit' 
                });
            }
        }

        mostrarFechaHora();
        
        setInterval(mostrarFechaHora, 1000);
    </script>
</body>
</html>