<?php

class NumeroSecreto {

    private $min;
    private $max;
    private $valor;

    private function __construct(int $min, int $max) {
        $this->max = $max;
        $this->min = $min;
        $this->generar();
    }

    public function generar(){
        $this->valor = rand($this->min, $this->max);
    }

    public static function crearEntre(int $min, int $max): NumeroSecreto {
        return new NumeroSecreto($min, $max);
    }

    public function es(): int {
        return $this->valor;
    }

    public function esMayorQue(int $otroNumero): bool {
        return $this->valor > $otroNumero;
    }

    public function esMenorQue(int $otroNumero): bool {
        return $this->valor < $otroNumero;
    }

    public function esIgualQue(int $otroNumero): bool {
        return $this->valor === $otroNumero;
    }

}
