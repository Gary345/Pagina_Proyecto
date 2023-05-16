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
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
</head>
<body>
    <div class="flex min-h-full flex-col justify-center px-6 py-12 lg:px-8">
        <div class="sm:mx-auto sm:w-full sm:max-w-sm">
            <img class="mx-auto h-10 w-auto" src="https://tailwindui.com/img/logos/mark.svg?color=indigo&shade=600" alt="Your Company">
            <h2 class="mt-10 text-center text-2xl font-bold leading-9 tracking-tight text-gray-900">Inicia Sesión con Tu Cuenta</h2>
        </div>

        <div class="mt-10 sm:mx-auto sm:w-full sm:max-w-sm">
            <form class="space-y-6" action="#" method="POST">
                <div>
                    <label for="correo" class="block text-sm font-medium leading-6 text-gray-900">Correo Electronico</label>
                    <div class="mt-2">
                    <input id="correo" name="correo" type="email" autocomplete="email" required class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
                    </div>
                    </div>
                    <div>
                        <div class="flex items-center justify-between">
                            <label for="contrasenia" class="block text-sm font-medium leading-6 text-gray-900">Contraseña</label>
                            <div class="text-sm">
                                <a href="#" class="font-semibold text-indigo-600 hover:text-indigo-500">Olvidaste la contraseña?</a>
                            </div>
                        </div>
                        <div class="mt-2">
                            <input id="contrasenia" name="contrasenia" type="password" autocomplete="current-password" required class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
                        </div>
                    </div>
        
                    <div>
                        <button type="submit" class="flex w-full justify-center rounded-md bg-indigo-600 px-3 py-1.5 text-sm font-semibold leading-6 text-white shadow-sm hover:bg-indigo-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">
                            Iniciar Sesión</button>
                    </div>
                </form>
        
                <p class="mt-10 text-center text-sm text-gray-500">
                    No te has registrado ?
                    <a href="#" class="font-semibold leading-6 text-indigo-600 hover:text-indigo-500">Registrate Aquí</a>
                </p>
            </div>
        </div>
        
