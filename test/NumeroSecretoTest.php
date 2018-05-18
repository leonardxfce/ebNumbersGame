<?php

use PHPUnit\Framework\TestCase;
use NumeroSecreto;

class NumeroSecretoTest extends TestCase {

    public function testCrearEntreDevuelveUnNumeroSecreto() {
        $numeroSecreto = NumeroSecreto::crear();
        $this->assertInstanceOf(NumeroSecreto::class, $numeroSecreto);
    }

    public function testElNumeroSecretoEs100() {
        $numeroSecreto = NumeroSecreto::crearEntre(100, 100);
        $numeroSecreto->generar();
        $this->assertEquals(100, $numeroSecreto->es());
    }

    public function testNoSeGeneranNumerosIguales() {
        $numeroSecreto = NumeroSecreto::crearEntre(0, 100);
        $numeroSecreto->generar();
        $numeroSecreto2 = NumeroSecreto::crearEntre(0, 100);
        $numeroSecreto2->generar();
        $this->assertNotEquals($numeroSecreto2->es(), $numeroSecreto->es());
    }
    public function testElNumeroSecretoEsMenorQue50() {
        $numeroSecreto = NumeroSecreto::crearEntre(0, 30);
        $resultado = $numeroSecreto->esMenorQue(50);
        $this->assertTrue($resultado);
    }
    public function testElNumeroSecretoEsMayorQue50() {
        $numeroSecreto = NumeroSecreto::crearEntre(50, 100);
        $numeroSecreto->generar();
        $resultado = $numeroSecreto->esMayorQue(40);
        $this->assertTrue($resultado);
    }
}
