<?php
session_start(); // Iniciar sesión

// Verificar si el usuario ya ha iniciado sesión
if (isset($_SESSION['loggedin']) && $_SESSION['loggedin'] === true) {
    header('Location: panel.php'); // Redirigir al panel de administrador si ya ha iniciado sesión
    exit;
}

// Verificar si se ha enviado el formulario de inicio de sesión
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Datos de conexión a la base de datos
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "prueba";

    // Obtener los valores del formulario de inicio de sesión
    $correo = $_POST['correo'];
    $contrasenia = $_POST['contrasenia'];

    // Crear la conexión a la base de datos
    $conn = new mysqli($servername, $username, $password, $dbname);

    // Verificar si hay algún error en la conexión
    if ($conn->connect_error) {
        die("Error en la conexión a la base de datos: " . $conn->connect_error);
    }

    // Crear la consulta SQL para verificar las credenciales de inicio de sesión
    $sql = "SELECT * FROM administrador WHERE Correo = '$correo' AND Contrasenia = '$contrasenia'";
    $result = $conn->query($sql);

    // Verificar si se encontró un registro con las credenciales proporcionadas
    if ($result->num_rows == 1) {
        $_SESSION['loggedin'] = true; // Marcar la sesión como iniciada
        $_SESSION['correo'] = $correo; // Guardar el correo electrónico en la sesión
        header('Location: panel.php'); // Redirigir al panel de administrador
        exit;
    } else {
        $error = "Correo o contraseña incorrectos";
    }

    // Cerrar la conexión a la base de datos
    $conn->close();
}
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Iniciar sesión</title>
</head>
<body>
    <h1>Iniciar sesión</h1>
    
    <?php
    if (isset($error)) {
        echo '<p>' . $error . '</p>';
    }
    ?>
    
    <form action="login.php" method="POST">
        <label for="correo">Correo:</label>
        <input type="email" id="correo" name="correo" required>
    
        <label for="contrasenia">Contraseña:</label>
        <input type="password" id="contrasenia" name="contrasenia" required>
    
        <input type="submit" value="Iniciar sesión">
    </form>
</body>
</html>
