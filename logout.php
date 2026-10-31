<?php
session_start();

// Destruimos todas las variables de sesión
$_SESSION = array();

// Destruimos la sesión por completo
session_destroy();

// Redirigimos al usuario de vuelta al login
header("Location: login.php");
exit();
?>