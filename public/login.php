<?php

require_once '../vendor/autoload.php';

use ProyectoAutenticacion\Autenticacion;
use ProyectoAutenticacion\AutenticacionException;

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $usuario = $_POST['usuario'];
    $password = $_POST['password'];
    try {
        $autenticacion = new Autenticacion();
        $autenticacion->iniciarSesion($usuario, $password);
        header('Location: index.php');
        exit();
    } catch (AutenticacionException $e) {
        echo "Error: " . $e->getMessage();
    }
}

?>

<form method="post">
    Usuario: <input type="text" name="usuario" required>
    Contraseña: <input type="password" name="password" required>
    <button type="submit">Iniciar Sesión</button>
</form>