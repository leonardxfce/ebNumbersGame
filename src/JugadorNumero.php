<?php

class JugadorNumero {

    private $numeroSecreto;
    private $estadoDeLaAdivinanza;

    private function __construct(NumeroSecreto $numero) {
        $this->numeroSecreto = $numero;
        $this->estadoDeLaAdivinanza = null;
    }

    public function crear(NumeroSecreto $numeroSecreto) {
        return new JugadorNumero($numeroSecreto);
    }

    public function pensarNumero() {
        $this->numeroSecreto->generar();
    }

    public function analizarEl($numeroDelOtroJugador) {
        if ($this->numeroSecreto->es($numeroDelOtroJugador)) {
            $this->estadoDeLaAdivinanza = "=";
        }
        if ($this->numeroSecreto->esMayorQue($numeroDelOtroJugador)) {
            $this->estadoDeLaAdivinanza = "<";
        }
        if ($this->numeroSecreto->esMenorQue($numeroDelOtroJugador)) {
            $this->estadoDeLaAdivinanza = ">";
        }
    }

    public function responder(): String {
        return $this->estadoDeLaAdivinanza;
    }

}
