<?php

namespace EB;

require 'NumeroSecreto.php';
require 'JugadorNumero.php';
require 'JugadorAdivinador.php';

$numeroSecreto = NumeroSecreto::crear();
$jugadorNumero = JugadorNumero::crear($numeroSecreto);
$jugadorAdivinanza = JugadorAdivinador::crear($numeroSecreto);
$jugadorNumero->pensar();
$condicion = true;
while ($condicion) {
    $jugadorAdivinanza->pensar();
    $numeroDelAdivinador = $jugadorAdivinanza->decir();
    $jugadorNumero->analizar($numeroDelAdivinador);
    $simboloDelJugadorSecreto = $jugadorNumero->decir();
    $jugadorAdivinanza->analizar($simboloDelJugadorSecreto);
    print_r($numeroDelAdivinador."\n");
    print_r($simboloDelJugadorSecreto."\n");
    $condicion = $simboloDelJugadorSecreto !== "=";
}
