<?php

use PHPUnit\Framework\TestCase;
use EB\JugadorNumero;
use EB\NumeroSecreto;

class JugadorNumeroTest extends TestCase
{
    private $jugadorNumero;

    public function setUp()
    {
        $numeroSecreto = NumeroSecreto::crear();
        $this->jugadorNumero = JugadorNumero::crear($numeroSecreto);
    }

    public function testCrearDevuelveUnJugadorNumero()
    {
        $this->assertInstanceOf(JugadorNumero::class, $this->jugadorNumero);
    }

    public function testElEstadoDeLaAdivinanzaEsVacioSiNoSeGenero()
    {
        $this->assertEquals("", $this->jugadorNumero->decir());
    }

    public function testSeRespondeMenorAUnNumeroSuperiorAlRangoPorDefecto()
    {
        $this->jugadorNumero->pensar();
        $this->assertEquals("<", $this->jugadorNumero->analizar(101));
    }

    public function testSeRespondeMayorAUnNumeroInferiorAlRangoPorDefecto()
    {
        $this->jugadorNumero->pensar();
        $this->assertEquals(">", $this->jugadorNumero->analizar(-1));
    }
}
