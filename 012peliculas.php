<?php
if (!isset($_SESSION)) {
    session_start();
}
if (!isset($_SESSION['usuario'])) {
    die("Error - debe <a href='index.php'>identificarse</a>.<br />");
}
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Listado de Peliculas</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.2/font/bootstrap-icons.css">
    <title>Peliculas</title>
</head>

<body>
    <div class="container-fluid">
        <div class="row">
            <h1>Bienvenido <?= $_SESSION['usuario'] ?>
            </h1>
            <p class="ml-5"><a href="013logout.php">Pulse aquí para salir </a> </p>
            <p class="ml-5"> Volver
                a <a href="012peliculas.php">Inicio <i class="bi bi-house"></i></a></p>
            <h2>Listado de Películas<i class="bi bi-film"></i></h2>
            <ul class="m-4">
                <li>Harry Potters</li>
                <li>Ant-Man</li>
                <li>Los Juegos del Hambre - Sinsajo II</li>
            </ul>
        </div>
    </div>
</body>

</html>