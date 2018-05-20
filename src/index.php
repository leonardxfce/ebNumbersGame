<?php

namespace EB;

require '../vendor/autoload.php';

$consola = UtilConsola::crearManejadorConsola();
$partida = Partida::crear($consola);
do {
    $partida->configurar();
    $partida->jugar();
    $foo = $partida->seguirJugando();
} while ($foo);
