<?php

class FactoryHumanoContraPCTest extends PHPUnit\Framework\TestCase {

    public function testDevuelveUnaFactoriaHumanoContraPC() {
        $factoria = new EB\FactoryHumanoContraPC();
        $this->assertInstanceOf(EB\FactoryHumanoContraPC::class, $factoria);
    }
    public function testDevuelveUnHumanoYUnaPCComoJugadores() {
        $factoria = new EB\FactoryHumanoContraPC();
        $this->assertInstanceOf(EB\JugadorAdivinador::class, $factoria->darJugadorAdivinanza());
        $this->assertInstanceOf(EB\HumanoNumero::class, $factoria->darJugadorNumero());
    }

}
