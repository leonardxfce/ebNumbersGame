<?php

use PHPUnit\Framework\TestCase;
use EB\NumeroSecreto;

class NumeroSecretoTest extends TestCase {

    private $numeroSecreto;

    public function setUp() {
        $this->numeroSecreto = NumeroSecreto::crear();
    }

    public function testCrearEntreDevuelveUnNumeroSecreto() {
        $this->assertInstanceOf(NumeroSecreto::class, $this->numeroSecreto);
    }

    public function testElNumeroSecretoEs100() {
        $numeroSecreto = $this->numeroSecreto->crearEntre(100, 100);
        $numeroSecreto->generar();
        $this->assertEquals(100, $numeroSecreto->es());
    }

    public function testNoSeGeneranNumerosIguales() {
        $numeroSecreto = $this->numeroSecreto->crearEntre(0, 100);
        $numeroSecreto->generar();
        $numeroSecreto2 = $this->numeroSecreto->crearEntre(0, 100);
        $numeroSecreto2->generar();
        $this->assertNotEquals($numeroSecreto2->es(), $numeroSecreto->es());
    }

    public function testElNumeroSecretoDaNumerosMenores() {
        for ($index = 0; $index < 1000; $index++) {
            $numeroSecreto = $this->numeroSecreto->crearEntre(0, 99);
            $numeroSecreto->generar();
            $resultado = $numeroSecreto->esMenorQue($numeroSecreto->es() + 1);
            $this->assertTrue($resultado);
        }
    }

    public function testElNumeroSecretoDaNumerosMayores() {
        for ($index = 0; $index < 1000; $index++) {
            $numeroSecreto = $this->numeroSecreto->crearEntre(1, 100);
            $numeroSecreto->generar();
            $resultado = $numeroSecreto->esMayorQue($numeroSecreto->es() - 1);
            $this->assertTrue($resultado);
        }
    }

}
