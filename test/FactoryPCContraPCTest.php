<?php

class FactoryPCContraPCTest extends PHPUnit\Framework\TestCase
{
    private $factoria;
    
    public function setUp()
    {
        $this->factoria = new EB\FactoryPCContraPC();
    }
    public function testDevuelveUnaFactoriaHumanoContraPC()
    {
        $this->assertInstanceOf(EB\FactoryPCContraPC::class, $this->factoria);
    }
    public function testDevuelveUnHumanoYUnaPCComoJugadores()
    {
        $this->assertInstanceOf(EB\JugadorAdivinador::class, $this->factoria->darJugadorAdivinanza());
        $this->assertInstanceOf(EB\JugadorNumero::class, $this->factoria->darJugadorNumero());
    }
}
