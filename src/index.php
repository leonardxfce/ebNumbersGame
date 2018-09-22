<?php

namespace EB;

class Inicio
{
    public function Iniciar()
    {
        require_once 'vendor/autoload.php';
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
