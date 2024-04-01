<?php
// Configuración de la conexión
$servername ="vw1.h.filess.io";
$username = "login_percentten";
$password = "7f72ca1f731b98dedbdc81fd0304e1ab7bec3898";
$dbname = "login_percentten";

// Conexión a la base de datos
$conn = mysqli_connect($servername, $username, $password, $dbname);

// Verificar la conexión
if (!$conn) {
    die("Error al conectarse a la base de datos: " . mysqli_connect_error());
}

// Iniciar sesión
if (isset($_POST['login'])) {
    $legajo = $_POST['legajo'] ?? '';
    $contrasena = $_POST['contraseña'] ?? '';

    $sql = "SELECT * FROM usuarios WHERE legajo = '$legajo' AND contrasena = '$contrasena'";

    $result = mysqli_query($conn, $sql);

    if (mysqli_num_rows($result) === 1) {
        session_start();
        $_SESSION['usuario'] = $legajo;
        header('Location: index.php');
        exit;

    } else {
        echo "<p class='text-danger'>Legajo o contraseña incorrecta.</p>";
    }
}
?>


<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inicio de sesión</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css">
    <style>
        body {
            background-image: url('img/fondo.jpg');
            background-size: cover;
            background-repeat: no-repeat;
        }
        .login-box {
            background-color: rgba(255,255,255,0.8); /* fondo semi-transparente */
            border-radius: 15px;
            box-shadow: 0 5px 10px rgba(0,0,0,0.1);
            padding: 20px; 
        }
        h1 {
            color: #4e73df;
        }
        .form-control {
            border-radius: 10px; 
        } 
        .btn-primary {
            background-color: #4e73df;
            border-color: #4e73df;
            border-radius: 10px;
            width: 100%;
        }
        .btn-primary:hover {
            background-color: #395ca6;
            border-color: #395ca6;
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="row justify-content-center align-items-center vh-100">
            <div class="col-md-4">
                <h1 class="text-center mb-4">Inicio de sesión</h1>
                <div class="login-box">
                    <form method="post">
                        <div class="mb-3">
                            <label for="legajo" class="form-label">Legajo:</label>
                            <input type="text" name="legajo" id="legajo" class="form-control" required>
                        </div>
                        <div class="mb-3">
                            <label for="contraseña" class="form-label">Contraseña:</label>
                            <input type="password" name="contraseña" id="contraseña" class="form-control" required>
                        </div>
                        <br>
                        <button type="submit" name="login" class="btn btn-primary">Iniciar sesión</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</body>
</html>
