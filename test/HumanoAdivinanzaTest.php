<?php

class HumanoAdivinanzaTest extends PHPUnit\Framework\TestCase
{
    private $humanoAdivinanza;

    public function setUp()
    {
        $consola = \EB\UtilConsola::crearManejadorConsola();
        $this->humanoAdivinanza = EB\HumanoAdivinanza::participar($consola);
    }

    public function testDevuelveUnHumanoAdivinanza()
    {
        $this->assertInstanceOf(EB\HumanoAdivinanza::class, $this->humanoAdivinanza);
    }

    public function testDevuelveNullAlComenzarAParticipar()
    {
        $this->assertNull($this->humanoAdivinanza->decir());
    }
}
