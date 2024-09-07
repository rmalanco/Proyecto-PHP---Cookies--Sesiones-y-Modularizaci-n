<?php
require_once '../vendor/autoload.php';

session_start();

if (isset($_SESSION['usuario'])) {
    echo "Bienvenido, " . $_SESSION['usuario'] . "!";
    echo '<a href="logout.php">Cerrar Sesión</a>';
} else {
    echo 'No has iniciado sesión. <a href="login.php">Iniciar sesión</a>';
}

echo '<pre>';
dd($_SESSION);
echo '</pre>';