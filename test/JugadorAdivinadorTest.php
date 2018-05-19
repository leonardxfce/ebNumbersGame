<?php

use PHPUnit\Framework\TestCase;
use EB\JugadorAdivinador;
use EB\NumeroSecreto;

class JugadorAdivinadorTest extends TestCase {

    public function testCrearDevuelveUnJugadorAdivinador() {
        $numeroSecreto = NumeroSecreto::crear();
        $jugadorAdivinador = JugadorAdivinador::crear($numeroSecreto);
        $this->assertInstanceOf(JugadorAdivinador::class, $jugadorAdivinador);
    }

    public function testElJugadorPiensaEnUnNumero() {
        $numeroSecreto = NumeroSecreto::crear();
        $jugadorAdivinador = JugadorAdivinador::crear($numeroSecreto);
        $jugadorAdivinador->pensar();
        $this->assertTrue(is_numeric($jugadorAdivinador->decir()));
    }

    public function testElJugadorDaNumerosMenoresHastaElCero() {
        $numeroSecreto = NumeroSecreto::crear();
        $jugadorAdivinador = JugadorAdivinador::crear($numeroSecreto);
        $jugadorAdivinador->pensar();
        $resultado1 = $jugadorAdivinador->decir();
        for ($index = 0; $index < 1000; $index++) {
            $jugadorAdivinador->analizar("<");
            $jugadorAdivinador->pensar();
            $resultado2 = $jugadorAdivinador->decir();
            $this->assertGreaterThanOrEqual($resultado2, $resultado1);
        }
    }
    
    public function testElJugadorDaNumerosMayoresHastaElCien() {
        $numeroSecreto = NumeroSecreto::crear();
        $jugadorAdivinador = JugadorAdivinador::crear($numeroSecreto);
        $jugadorAdivinador->pensar();
        $resultado1 = $jugadorAdivinador->decir();
        for ($index = 0; $index < 1000; $index++) {
            $jugadorAdivinador->analizar(">");
            $jugadorAdivinador->pensar();
            $resultado2 = $jugadorAdivinador->decir();
            $this->assertGreaterThanOrEqual($resultado1,$resultado2);
        }
    }

    public function testUnaVezEncontradoDaSiempreElMismoNumero() {
        $numeroSecreto = NumeroSecreto::crear();
        $jugadorAdivinador = JugadorAdivinador::crear($numeroSecreto);
        $jugadorAdivinador->pensar();
        $jugadorAdivinador->analizar("=");
        $resultado = $jugadorAdivinador->decir();
        for ($index = 0; $index < 1000; $index++) {
            $jugadorAdivinador->pensar();
            $this->assertEquals($resultado, $jugadorAdivinador->decir());
        }
    }

}
