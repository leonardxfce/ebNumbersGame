<?php

namespace EB;

class JugadorNumero implements Jugable {

    private $numeroSecreto;
    private $estadoDeLaAdivinanza;

    private function __construct(NumeroSecreto $numero) {
        $this->numeroSecreto = $numero;
        $this->estadoDeLaAdivinanza = "";
    }

    public static function crear(NumeroSecreto $numeroSecreto): JugadorNumero {
        return new JugadorNumero($numeroSecreto);
    }

    public function pensar() {
        $this->numeroSecreto->generar();
    }

    public function analizar($numeroDelOtroJugador) {
        if ($this->numeroSecreto->es($numeroDelOtroJugador)) {
            $this->estadoDeLaAdivinanza = "=";
        }
        if ($this->numeroSecreto->esMayorQue($numeroDelOtroJugador)) {
            $this->estadoDeLaAdivinanza = ">";
        }
        if ($this->numeroSecreto->esMenorQue($numeroDelOtroJugador)) {
            $this->estadoDeLaAdivinanza = "<";
        }
        return $this->estadoDeLaAdivinanza;
    }

    public function decir(): String {
        return $this->estadoDeLaAdivinanza;
    }

}
