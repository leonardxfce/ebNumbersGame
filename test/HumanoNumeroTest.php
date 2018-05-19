<?php

class HumanoNumeroTest extends PHPUnit\Framework\TestCase {

    public function testDevuelveUnHumanoNumero() {
        $consola = \EB\UtilConsola::crearManejadorConsola();
        $humanoNumero = EB\HumanoNumero::participar($consola);
        $this->assertInstanceOf(EB\HumanoNumero::class, $humanoNumero);
    }

}
