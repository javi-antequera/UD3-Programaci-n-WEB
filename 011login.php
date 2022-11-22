<?php
if (isset($_POST['enviar'])) {
    $usuario = $_POST['usuario'];
    $password = $_POST['password'];

    if (empty($usuario) || empty($password)) {
        $error = "Introduce tanto usuario como contraseña";
        include "010index.php";
    } else {
        if ($usuario == "usuario" && $password == "usuario") {
            session_start();
            $_SESSION['usuario'] = $usuario;
            include "012peliculas.php";
        } else {
            $error = "Usuario o contraseña incorrectas!";
            include "010index.php";
        }
    }
}