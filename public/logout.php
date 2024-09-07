<?php
require_once '../vendor/autoload.php';

use ProyectoAutenticacion\Autenticacion;

$autenticacion = new Autenticacion();
$autenticacion->cerrarSesion();
header('Location: index.php');
exit();