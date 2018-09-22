<?php

class FactoryPCContraHumanoTest extends PHPUnit\Framework\TestCase
{
    private $factoria;

    public function setUp()
    {
        $this->factoria = new EB\FactoryPCContraHumano();
    }

    public function testDevuelveUnaFactoriaPCContraHumano()
    {
        $this->assertInstanceOf(EB\FactoryPCContraHumano::class, $this->factoria);
    }

    public function testDevuelveUnHumanoYUnaPCComoJugadores()
    {
        $this->assertInstanceOf(EB\HumanoAdivinanza::class, $this->factoria->darJugadorAdivinanza());
        $this->assertInstanceOf(EB\JugadorNumero::class, $this->factoria->darJugadorNumero());
    }
}
