<?php
session_start(); // Iniciar sesión

// Verificar si el usuario no ha iniciado sesión
if (!isset($_SESSION['loggedin']) || $_SESSION['loggedin'] !== true) {
    header('Location: login.php'); // Redirigir al inicio de sesión si no ha iniciado sesión
    exit;
}

// Obtener el correo electrónico del usuario desde la sesión
$correo = $_SESSION['correo'];
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Panel de administrador</title>
</head>
<body>
    <h1>Bienvenido, <?php echo $correo; ?></h1>
    
    <!-- Botón de cerrar sesión -->
    <form action="logout.php" method="POST">
        <input type="submit" value="Cerrar sesión">
    </form>
    
    <!-- Resto del contenido de la página -->
    <!-- Aquí puedes agregar el contenido y las funcionalidades específicas del panel de administrador -->
</body>
</html>

