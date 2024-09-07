<?php

namespace ProyectoAutenticacion;

use ProyectoAutenticacion\AutenticacionException;
use ProyectoAutenticacion\Fechas;

session_start();

class Autenticacion
{
    protected $fechas;

    public function __construct()
    {
        $this->fechas = new Fechas();
    }


    public function iniciarSesion($usuario, $password)
    {
        $credencialesValidas = ($usuario === 'admin' && $password === '1234');

        if (!$credencialesValidas) {
            throw new AutenticacionException('Usuario o contraseña incorrectos.');
        }

        $_SESSION['usuario'] = $usuario;

        // Initialize the $fechas variable
        $fechas = new Fechas();

        // Guardar una cookie por 7 días
        setcookie('token', bin2hex(random_bytes(16)), $fechas->calcularVencimientoCookie(7), "/", "", false, true);
        return true;
    }

    public function cerrarSesion()
    {
        session_destroy();
        setcookie('token', '', time() - 3600, "/");
    }

    public function hola(): string
    {
        return 'Hola';
    }
}