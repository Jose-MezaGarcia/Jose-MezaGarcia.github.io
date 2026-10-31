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
    <title>Autobiografía</title>
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

    <h1 align="center">Mi Autobiografía</h1>
    <p>¡Hola a todos! Me presento soy Jose Meza, aunque la mayoría de mis compañeros simplemente me dicen Meza. Actualmente curso el quinto semestre de Ingeniería de Software. Elegí esta carrera porque desde pequeño siempre me causó curiosidad entender qué había detrás de una computadora y cómo funcionaba realmente el software.
     Pero para contarles un poco más de mí en la prepa estudié una carrera técnica en Alimentos y Bebidas. La verdad aprendí muchísimo, sobre todo a cocinar y a resolver el estrés, habilidades que hoy en día valoro el doble ahora que me toca ser foráneo.
    </p>
    
    <h1 align="center">Una foto mia</h1>

    <div class="contenedor">
        
        <img src="Fotos/jose.jpeg" alt="Imagen 1" width="200" style="display: block; margin: 0 auto;">
    </div>

    <h3>Una musiquita mientras leen mi autobiografía</h3>

    <audio controls>
        <source src="campanella.mp3" type="audio/mpeg">
    </audio>

    <div>
        <h3>Curiosidades sobre io (Jose)</h3>
        <ul>
            <li>Me gusta el anime.</li>
            <li>Disfruto ir a ver los atardeceres en la playa.</li>
            <li>Fui 2 regidor en un cabildo adolescente.</li>
            <li>Solo tengo una hermana.</li>
            <li>En mi familia tenemos 2 perros un macho (Apolo) y una hembra (Athenea).</li>
            <li>A veces disfruto estar solo sin que nadie me moleste o hable.</li>
            <li>A veces amanezco con ganas de no hablar pero luego la gente piensa que estoy molesto y no es así.</li>
        </ul>
    </div>

    <div>
        <h3>Mis Intereses</h3>
        <ul>
            <li>Me gusta la musica clasica.</li>
            <li>Me gustaría aprender a tocar violín.</li>
            <li>A veces leo.</li>
            <li>Me fascinan las canciones de Belanova.</li>
        </ul>
    </div>

    <div>
        <h3>Mis Enlaces</h3>
        <p>Aquí puedes conocer un poco mas sobre mis mascotas: <a href="misperros.php">Apolo y Athenea</a></p>
        <p>Mis redes sociales:</p>
        <a href="https://www.instagram.com/jose_thg3?igsi=eXM5b3kyMnQzdmt2&utm_source=qr" target="_blank" rel="noopener noreferrer">Instagram</a> | 
        <a href="https://www.facebook.com/share/17myB26ZbN/?mibextid=wwXIfr" target="_blank" rel="noopener noreferrer">Facebook</a> | 
        <a href="https://www.linkedin.com/in/jose-mg-b41733364?utm_source=share_via&utm_content=profile&utm_medium=member_ios" target="_blank" rel="noopener noreferrer">LinkedIn</a>
    </div>

    <footer>
        <p>Jose Meza ;)  2026</p>
    </footer>
</body>
</html>