<?php

class HumanoAdivinanzaTest extends PHPUnit\Framework\TestCase {

    public function testDevuelveUnHumanoAdivinanza() {
        $consola = \EB\UtilConsola::crearManejadorConsola();
        $humanoAdivinanza = EB\HumanoAdivinanza::participar($consola);
        $this->assertInstanceOf(EB\HumanoAdivinanza::class, $humanoAdivinanza);
    }

    public function testDevuelveNullAlComenzarAParticipar() {
        $consola = \EB\UtilConsola::crearManejadorConsola();
        $humanoAdivinanza = EB\HumanoAdivinanza::participar($consola);
        $this->assertNull($humanoAdivinanza->decir());
    }

}
