<?php

class TestUtilConsola extends PHPUnit\Framework\TestCase {

    public function testDevuelveUnUtilConsola() {
        $consola = \EB\UtilConsola::crearManejadorConsola();
        $this->assertInstanceOf(\EB\UtilConsola::class, $consola);
    }

}
