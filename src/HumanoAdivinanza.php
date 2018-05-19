<?php

namespace EB;

class HumanoAdivinanza implements Jugable {

    private $consola;
    private $numero;

    public function __construct(UtilConsola $consola) {
        $this->consola = $consola;
        $this->numero = null;
    }

    public static function participar(UtilConsola $consola) {
        return new HumanoAdivinanza($consola);
    }

    public function analizar($datoDelOtroJugador) {
        $this->consola->mostrar("El otro Jugador dice $datoDelOtroJugador");
    }

    public function decir() {
        return $this->numero;
    }

    public function pensar() {
        $this->numero = $this->consola->leer();
    }

}
