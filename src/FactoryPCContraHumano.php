<?php

namespace EB\Jugadores;

class FactoryPCContraHumano implements AbstractFactoryJugadores {

    public function darJugadorAdivinanza() {
        $consola = UtilConsola::crearManejadorConsola();
        return HumanoAdivinanza::participar($consola);
    }

    public function darJugadorNumero() {
        $numeroSecreto = NumeroSecreto::crear();
        return JugadorNumero::crear($numeroSecreto);
    }

}
