<?php

class FactoryPCContraPCTest extends PHPUnit\Framework\TestCase {

    public function testDevuelveUnaFactoriaHumanoContraPC() {
        $factoria = new EB\FactoryPCContraPC();
        $this->assertInstanceOf(EB\FactoryPCContraPC::class, $factoria);
    }
    public function testDevuelveUnHumanoYUnaPCComoJugadores() {
        $factoria = new EB\FactoryPCContraPC();
        $this->assertInstanceOf(EB\JugadorAdivinador::class, $factoria->darJugadorAdivinanza());
        $this->assertInstanceOf(EB\JugadorNumero::class, $factoria->darJugadorNumero());
    }

}
