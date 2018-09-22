<?php

use PHPUnit\Framework\TestCase;
use EB\JugadorAdivinador;
use EB\NumeroSecreto;

class JugadorAdivinadorTest extends TestCase
{
    private $jugadorAdivinador;

    public function setUp()
    {
        $numeroSecreto = NumeroSecreto::crear();
        $this->jugadorAdivinador = JugadorAdivinador::crear($numeroSecreto);
    }

    public function testCrearDevuelveUnJugadorAdivinador()
    {
        $this->assertInstanceOf(JugadorAdivinador::class, $this->jugadorAdivinador);
    }

    public function testElJugadorPiensaEnUnNumero()
    {
        $this->jugadorAdivinador->pensar();
        $this->assertTrue(is_numeric($this->jugadorAdivinador->decir()));
    }

    public function testElJugadorDaNumerosMenoresHastaElCero()
    {
        $this->jugadorAdivinador->pensar();
        $resultado1 = $this->jugadorAdivinador->decir();
        $this->jugadorAdivinador->analizar("<");
        $this->jugadorAdivinador->pensar();
        $resultado2 = $this->jugadorAdivinador->decir();
        $this->assertGreaterThanOrEqual($resultado2, $resultado1);
    }

    public function testElJugadorDaNumerosMayoresHastaElCien()
    {
        $this->jugadorAdivinador->pensar();
        $resultado1 = $this->jugadorAdivinador->decir();
        
        $this->jugadorAdivinador->analizar(">");
        $this->jugadorAdivinador->pensar();
        $resultado2 = $this->jugadorAdivinador->decir();
        $this->assertGreaterThanOrEqual($resultado1, $resultado2);
    }

    public function testUnaVezEncontradoDaSiempreElMismoNumero()
    {
        $this->jugadorAdivinador->pensar();
        $this->jugadorAdivinador->analizar("=");
        $resultado = $this->jugadorAdivinador->decir();
        for ($index = 0; $index < 1000; $index++) {
            $this->jugadorAdivinador->pensar();
            $this->assertEquals($resultado, $this->jugadorAdivinador->decir());
        }
    }
}
