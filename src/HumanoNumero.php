<?php

namespace EB;

class HumanoNumero implements Jugable {

    private $consola;

    private function __construct(UtilConsola $consola) {
        $this->consola = $consola;
    }

    public static function participar(UtilConsola $consola) {
        return new HumanoNumero($consola);
    }

    public function analizar($datoDelOtroJugador) {
        $this->consola->mostrar("El otro Jugador dice $datoDelOtroJugador");
    }

    public function decir() {
        return $this->consola->leer();
    }

    public function pensar() {
        $this->consola->mostrar("Pensa en numero");
    }

}
