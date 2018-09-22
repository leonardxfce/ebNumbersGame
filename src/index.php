<?php

namespace EB;
require 'vendor/autoload.php';

class Inicio{
    public function Iniciar()
    {
        $consola = UtilConsola::crearManejadorConsola();
        $partida = Partida::crear($consola);
        do {
            $partida->configurar();
            $partida->jugar();
            $consola->mostrar("Seguir Jugando");
            $opcion = $consola->leer();
            $foo = $partida->seguirJugando($opcion);
        } while ($foo);
    }
}
