<?php

namespace ProyectoAutenticacion;

use Exception, Throwable;

class AutenticacionException extends Exception
{
    public function __construct($message = 'Error de autenticación', $code = 0, Throwable $previous = null)
    {
        parent::__construct($message, $code, $previous);
    }
}