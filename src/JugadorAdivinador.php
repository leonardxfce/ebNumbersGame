<?php

namespace EB;

class JugadorAdivinador {

    private $numeroSecreto;
    private $min;
    private $max;

    private function __construct($numeroSecreto, $min, $max) {
        $this->min = $min;
        $this->max = $max;
        $this->numeroSecreto = $numeroSecreto;
    }

    public static function crear(NumeroSecreto $numeroSecreto): JugadorAdivinador {
        return new JugadorAdivinador($numeroSecreto, 0, 100);
    }

    public function analizar($repuestaDelOtroJugador) {
        if ($repuestaDelOtroJugador === ">") {
            $this->min =  $this->decir() + 1;
        }
        if ($repuestaDelOtroJugador === "<") {
            $this->max = $this->decir() - 1 ;
        }
        if ($repuestaDelOtroJugador === "=") {
            $this->max = $this->decir();
            $this->min = $this->decir();
        }
    }

    public function pensar() {
        $this->numeroSecreto = $this->numeroSecreto
                ->crearEntre($this->min, $this->max); //Algo huele mal aca :(
        $this->numeroSecreto->generar();
    }

    public function decir(): int {
        return $this->numeroSecreto->es();
    }

    public function darLimites(): array {
        return [$this->min, $this->max];
    }

}
