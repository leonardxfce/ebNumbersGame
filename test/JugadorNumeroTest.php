<?php

use PHPUnit\Framework\TestCase;
use EB\JugadorNumero;
use EB\NumeroSecreto;

class JugadorNumeroTest extends TestCase {

    public function testCrearDevuelveUnJugadorNumero() {
        $numeroSecreto = NumeroSecreto::crear();
        $jugadorNumero = JugadorNumero::crear($numeroSecreto);
        $this->assertInstanceOf(JugadorNumero::class, $jugadorNumero);
    }

    public function testElEstadoDeLaAdivinanzaEsVacioSiNoSeGenero() {
        $numeroSecreto = NumeroSecreto::crear();
        $jugadorNumero = JugadorNumero::crear($numeroSecreto);
        $this->assertEquals("", $jugadorNumero->decir());
    }

    public function testSeRespondeMenorAUnNumeroSuperiorAlRangoPorDefecto() {
        $numeroSecreto = NumeroSecreto::crear();
        $jugadorNumero = JugadorNumero::crear($numeroSecreto);
        $jugadorNumero->pensar();
        $this->assertEquals("<", $jugadorNumero->analizar(101));
    }

    public function testSeRespondeMayorAUnNumeroInferiorAlRangoPorDefecto() {
        $numeroSecreto = NumeroSecreto::crear();
        $jugadorNumero = JugadorNumero::crear($numeroSecreto);
        $jugadorNumero->pensar();
        $this->assertEquals(">", $jugadorNumero->analizar(-1));
    }

}
