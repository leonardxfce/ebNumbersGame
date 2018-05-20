<?php

class FactoryPCContraHumanoTest extends PHPUnit\Framework\TestCase {

    public function testDevuelveUnaFactoriaPCContraHumano() {
        $factoria = new EB\FactoryPCContraHumano();
        $this->assertInstanceOf(EB\FactoryPCContraHumano::class, $factoria);
    }
    public function testDevuelveUnHumanoYUnaPCComoJugadores() {
        $factoria = new EB\FactoryPCContraHumano();
        $this->assertInstanceOf(EB\HumanoAdivinanza::class, $factoria->darJugadorAdivinanza());
        $this->assertInstanceOf(EB\JugadorNumero::class, $factoria->darJugadorNumero());
    }

}
