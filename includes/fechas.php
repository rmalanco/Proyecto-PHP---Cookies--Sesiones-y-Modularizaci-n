<?php

namespace ProyectoAutenticacion;

use DateTime;

class Fechas
{
    public function calcularVencimientoCookie($dias)
    {
        $fecha = new DateTime();
        $fecha->modify("+$dias days");
        return $fecha->getTimestamp();
    }
}
