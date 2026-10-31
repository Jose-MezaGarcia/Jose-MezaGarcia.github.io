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
    <title>Contacto</title>
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

    <form>
        <fieldset>
            <legend>Uso de cajas de texto - Nombre</legend>
            Nombre: <input name='nombre' type='text'>
            Apellidos: <input name='Apellido' type='text'>
        </fieldset>

        <fieldset>
            <legend>Uso de radio botones - Género</legend>
            <input type="radio" name="radio1" id="radioM"> Masculino
            <input type="radio" name="radio1" id="radioF"> Femenino
            <input type="radio" name="radio1" id="radioO"> Otro
        </fieldset>
    </form>

    <form>
        <fieldset>
            <legend>Uso de checkboxes - Intereses</legend>
            <input type="checkbox" name="deporte" value="Deportes"> Hacer Deportes
            <input type="checkbox" name="TV" value="Television"> Ver Television
            <input type="checkbox" name="ejercicio" value="Ejercicio"> Hacer Ejercicio
        </fieldset>

        <fieldset>
            <legend>Uso del Select - Estudios Actuales</legend>
            <select name="estudios">
                <option value="primaria">Primaria</option>
                <option value="secundaria">Secundaria</option>
                <option value="preparatoria">Preparatoria</option>
                <option value="universidad">Universidad</option>
            </select>
        </fieldset>
    </form>

    <form>
        <fieldset>
            <legend>Uso del list - Navegador usado</legend>
            <label> Selecciona el Buscador que usas: 
            <input list="navegadores" name="navegador">
                <datalist id="navegadores">
                    <option value="Google Chrome">
                    <option value="Mozilla Firefox">
                    <option value="Microsoft Edge">
                    <option value="Opera">
                    <option value="Safari">
                </datalist>
            </label>
        </fieldset>
    </form>

    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d16228.492660657961!2d-88.15670440062947!3d21.152918072347973!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x8f522b6c741fe2ff%3A0x1a4273ac58448ae1!2sUADY%20-%20Unidad%20Multidisciplinaria%20Tizim%C3%ADn!5e0!3m2!1ses!2smx!4v1787772760080!5m2!1ses!2smx" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="strict-origin-when-cross-origin"></iframe>

</body>
</html>