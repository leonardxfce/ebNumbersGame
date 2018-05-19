<?php

namespace EB;

require '../vendor/autoload.php';

$numeroSecreto = NumeroSecreto::crear();
$consola = UtilConsola::crearManejadorConsola();
$jugadorAdivinanza = HumanoAdivinanza::participar($consola);
//$jugadorAdivinanza = JugadorAdivinador::crear($numeroSecreto);
//$jugadorNumero = HumanoNumero::participar($consola);
$jugadorNumero = JugadorNumero::crear($numeroSecreto);
$jugadorNumero->pensar();
$condicion = true;
while ($condicion) {
    $jugadorAdivinanza->pensar();
    $numeroDelAdivinador = $jugadorAdivinanza->decir();
    $jugadorNumero->analizar($numeroDelAdivinador);
    $simboloDelJugadorSecreto = $jugadorNumero->decir();
    $jugadorAdivinanza->analizar($simboloDelJugadorSecreto);
    //var_dump($numeroDelAdivinador);
    //var_dump($simboloDelJugadorSecreto);
    //var_dump($simboloDelJugadorSecreto !== "=");
    $condicion = $simboloDelJugadorSecreto !== "=";
}
