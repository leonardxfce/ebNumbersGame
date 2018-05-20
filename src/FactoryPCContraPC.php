<?php

namespace EB;

class FactoryPCContraPC implements AbstractFactoryJugadores {

    public function darJugadorAdivinanza() {
        $numeroSecreto = NumeroSecreto::crear();
        return JugadorAdivinador::crear($numeroSecreto);
    }

    public function darJugadorNumero() {
        $numeroSecreto = NumeroSecreto::crear();
        return JugadorNumero::crear($numeroSecreto);
    }

}
