<?php

namespace EB;

class UtilConsola
{
    public static function crearManejadorConsola()
    {
        return new UtilConsola();
    }

    public function leer()
    {
        return strtoupper(trim(fgets(STDIN)));
    }

    public function mostrar($msg)
    {
        fwrite(STDOUT, "$msg \n");
    }
}
