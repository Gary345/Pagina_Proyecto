<?php
session_start(); // Iniciar sesión

// Destruir todas las variables de sesión
$_SESSION = array();

// Destruir la sesión
session_destroy();

// Redirigir al inicio de sesión
header('Location: login.php');
exit;
?>
