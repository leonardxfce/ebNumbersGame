<?php

namespace EB;

require '../vendor/autoload.php';

$consola = UtilConsola::crearManejadorConsola();
$partida = Partida::crear($consola);
do {
    $partida->configurar();
    $partida->jugar();
    $this->consola->mostrar("Seguir Jugando");
    $opcion = $this->consola->leer();
    $foo = $partida->seguirJugando($opcion);
} while ($foo);
