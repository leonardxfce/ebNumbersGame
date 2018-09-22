<?php

class PartidaTest extends PHPUnit\Framework\TestCase
{
    private $partida;

    protected function setUp()
    {
        $consola = \EB\UtilConsola::crearManejadorConsola();
        $this->partida = EB\Partida::crear($consola);
    }

    public function testDevuelveUnaPartida()
    {
        $this->assertInstanceOf(EB\Partida::class, $this->partida);
    }

    public function testDevuelveDosJugadoresPC()
    {
        $this->partida->definirTipoPartida("PC-PC");
        $esperados = $this->partida->darJugadores();
        $this->assertInstanceOf(EB\JugadorNumero::class, $esperados[0]);
        $this->assertInstanceOf(EB\JugadorAdivinador::class, $esperados[1]);
    }

    public function testDevuelvePCyHumano()
    {
        $this->partida->definirTipoPartida("HUMANO-PC");
        $esperados = $this->partida->darJugadores();
        $this->assertInstanceOf(EB\HumanoNumero::class, $esperados[0]);
        $this->assertInstanceOf(EB\JugadorAdivinador::class, $esperados[1]);
    }

    public function testDevuelveHumanoyPC()
    {
        $this->partida->definirTipoPartida("PC-HUMANO");
        $esperados = $this->partida->darJugadores();
        $this->assertInstanceOf(EB\JugadorNumero::class, $esperados[0]);
        $this->assertInstanceOf(EB\HumanoAdivinanza::class, $esperados[1]);
    }

    public function testSeguirJugandoDevuelveTrueSiSeEscribeSi()
    {
        $this->assertTrue($this->partida->seguirJugando("SI"));
    }

    public function testSeguirJugandoDevuelveFalseParaCualquierOtroString()
    {
        $this->assertFalse($this->partida->seguirJugando(""));
    }
}
