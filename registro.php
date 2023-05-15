<?php
// Verificar si se ha enviado el formulario
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Datos de conexión a la base de datos
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "prueba";

    // Obtener los valores del formulario
    $nombre = $_POST['nombre'];
    $correo = $_POST['correo'];
    $contrasenia = $_POST['contrasenia'];

    // Crear la conexión a la base de datos
    $conn = new mysqli($servername, $username, $password, $dbname);

    // Verificar si hay algún error en la conexión
    if ($conn->connect_error) {
        die("Error en la conexión a la base de datos: " . $conn->connect_error);
    }

    // Verificar si ya hay un administrador registrado
    $sql = "SELECT * FROM administrador";
    $result = $conn->query($sql);

    // Si ya existe un administrador registrado, mostrar un mensaje
   // Si ya existe un administrador registrado, mostrar un mensaje
if ($result->num_rows > 0) {
    echo '<script>alert("Ya se ha registrado un administrador. No se pueden realizar más registros.");</script>';
} else {
    // Crear la consulta SQL para insertar los datos en la tabla "administrador"
    $sql = "INSERT INTO administrador (Nombre, Correo, Contrasenia) VALUES ('$nombre', '$correo', '$contrasenia')";

    // Ejecutar la consulta y verificar si se ha insertado correctamente
    if ($conn->query($sql) === TRUE) {
        echo '<script>alert("Registro insertado correctamente.");</script>';
    } else {
        echo '<script>alert("Error al insertar el registro: ' . $conn->error . '");</script>';
    }
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
    <title>Registro</title>
    <link rel="stylesheet" type="text/css" href="styleRegistro.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
</head>
<body>
<script type="text/javascript">
function validarContrasenias() {
  var contrasenia = document.getElementById("contrasenia").value;
  var confirmar_contrasenia = document.getElementById("confirmar_contrasenia").value;
  
  if (contrasenia !== confirmar_contrasenia) {
    alert("Las contraseñas no coinciden. Por favor, verifique y vuelva a intentarlo.");
    return false; // detener el envío del formulario
  }
  return true; // permitir el envío del formulario
}
</script>
    <div id="inicio">
        <div class="container">
            <div class="row">
                <header>
                    <h1 class="titulo">Barber Shop</h1>
                </header>
            </div>
        </div>
        <div class="col-sm-12">
            <div class="formulario">
                <h2>Registro de administrador </h2>
                <form action="registro.php" method="POST" onsubmit="return validarContrasenias();">
                    <label for="nombre">Nombre:</label>
                    <input type="text" id="nombre" name="nombre"  required placeholder="Alicia Filomena Sosa Baeza">

                    <label for="correo">Correo:</label>
                    <input type="email" id="correo" name="correo"required placeholder="email@dominio.com">

                    <label for="contrasenia">Contraseña:</label>
                    <input type="password" id="contrasenia" name="contrasenia" minlength="8" maxlength="16" required placeholder="Ejemplo123/*-">

                    <label for="confirmar_contrasenia">Confirmar Contraseña:</label>
                    <input type="password" id="confirmar_contrasenia" name="confirmar_contrasenia" minlength="8" maxlength="16" required>

                    <input type="submit" value="Registrarse">
                </form>
            </div>
        </div>
    </div>
    


          <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
    </body>
    </html>
    
