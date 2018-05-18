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

    public function testElEstadoDeLaAdivinanzaEsVacioSiNoSeGenero(){
        $numeroSecreto = NumeroSecreto::crear();
        $jugadorNumero = JugadorNumero::crear($numeroSecreto);
        $this->assertEquals("", $jugadorNumero->responder());
    }
    
    public function testSeRespondeMayorAUnNumeroSuperiorAlRango() {
        $numeroSecreto = NumeroSecreto::crear();
        $jugadorNumero = JugadorNumero::crear($numeroSecreto);
        $jugadorNumero->pensarNumero();
        $this->assertEquals(">",$jugadorNumero->analizarEl(101));
    }
    public function testSeRespondeMenorAUnNumeroInferiorAlRango() {
        $numeroSecreto = NumeroSecreto::crear();
        $jugadorNumero = JugadorNumero::crear($numeroSecreto);
        $jugadorNumero->pensarNumero();
        $this->assertEquals("<",$jugadorNumero->analizarEl(-1));
    }
}
