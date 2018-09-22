<?php

class FactoryHumanoContraPCTest extends PHPUnit\Framework\TestCase
{
    private $factoria;

    public function setUp()
    {
        $this->factoria = new EB\FactoryHumanoContraPC();
    }

    public function testDevuelveUnaFactoriaHumanoContraPC()
    {
        $this->assertInstanceOf(EB\FactoryHumanoContraPC::class, $this->factoria);
    }

    public function testDevuelveUnHumanoYUnaPCComoJugadores()
    {
        $this->assertInstanceOf(EB\JugadorAdivinador::class, $this->factoria->darJugadorAdivinanza());
        $this->assertInstanceOf(EB\HumanoNumero::class, $this->factoria->darJugadorNumero());
    }
}
