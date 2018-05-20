<?php

class PartidaTest extends PHPUnit\Framework\TestCase {

    public function testDevuelveUnaPartida() {
        $consola = \EB\UtilConsola::crearManejadorConsola();
        $partida = EB\Partida::crear($consola);
        $this->assertInstanceOf(EB\Partida::class, $partida);
    }

    public function testDevuelveDosJugadoresPC() {
        $consola = \EB\UtilConsola::crearManejadorConsola();
        $partida = EB\Partida::crear($consola);
        $partida->definirTipoPartida("PC-PC");
        $esperados = $partida->darJugadores();
        $this->assertInstanceOf(EB\JugadorNumero::class, $esperados[0]);
        $this->assertInstanceOf(EB\JugadorAdivinador::class, $esperados[1]);
    }

    public function testDevuelvePCyHumano() {
        $consola = \EB\UtilConsola::crearManejadorConsola();
        $partida = EB\Partida::crear($consola);
        $partida->definirTipoPartida("HUMANO-PC");
        $esperados = $partida->darJugadores();
        $this->assertInstanceOf(EB\HumanoNumero::class, $esperados[0]);
        $this->assertInstanceOf(EB\JugadorAdivinador::class, $esperados[1]);
    }

    public function testDevuelveHumanoyPC() {
        $consola = \EB\UtilConsola::crearManejadorConsola();
        $partida = EB\Partida::crear($consola);
        $partida->definirTipoPartida("PC-HUMANO");
        $esperados = $partida->darJugadores();
        $this->assertInstanceOf(EB\JugadorNumero::class, $esperados[0]);
        $this->assertInstanceOf(EB\HumanoAdivinanza::class, $esperados[1]);
    }

    public function testSeguirJugandoDevuelveTrueSiSeEscribeSi() {
        $consola = \EB\UtilConsola::crearManejadorConsola();
        $partida = EB\Partida::crear($consola);
        $this->assertTrue($partida->seguirJugando("SI"));
    }

    public function testSeguirJugandoDevuelveFalseParaCualquierOtroString() {
        $consola = \EB\UtilConsola::crearManejadorConsola();
        $partida = EB\Partida::crear($consola);
        $this->assertFalse($partida->seguirJugando(""));
    }

}
