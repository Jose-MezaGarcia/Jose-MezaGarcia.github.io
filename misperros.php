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
    <title>Mis Perros</title>
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

    <h1>Apolinares y Athenea</h1>
    <p>En mi familia las mascotas son un miembro más, y la historia de cómo llegaron es muy especial. Mis papás encontraron a tres cachorros hermanos abandonados en su terreno; estaban en condiciones críticas, con llagas y plagados de pulgas. Decidimos adoptarlos a los tres: los atendimos, completamos sus vacunas y poco a poco recuperaron la salud y la energía.
    Tiempo después, ya más grandes, se escaparon un día y tuvieron la mala suerte de comerse un pollo descompuesto de la calle que cualquier otro animal habría ignorado. La intoxicación fue tan severa que Zeus, por desgracia, no resistió. Fue una pérdida dolorosa, pero Apolo y Athenea sobrevivieron al tratamiento y hoy en día continúan llenando la casa de vida.</p>

    <h2>De pequeños</h2>
    <div class="fila-fotos">
        <img src="Fotos/pequeños2.jpg" alt="De pequeños 2" class="foto-horizontal">
    </div>

    <h3>Apolo</h3>
    <div class="fila-fotos">
        <img src="Fotos/apolo.jpeg" alt="Apolo vertical" class="foto-vertical">
        <img src="Fotos/apolo2.jpeg" alt="Apolo horizontal" class="foto-horizontal">
    </div>

    <h3>Athenea</h3>
    <div class="fila-fotos">
        <img src="Fotos/athene2.jpeg" alt="Athenea vertical" class="foto-vertical">
        <img src="Fotos/athenea.jpg" alt="Athenea vertical" class="foto-vertical">
    </div>

    <a href="autobiografia.php" class="volver">Volver a mi Autobiografía</a>

    <footer>
        <p>Apolo y athenea ;) 2026</p>
    </footer>

</body>
</html>