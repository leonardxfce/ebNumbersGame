<?php

namespace EB;

class FactoryHumanoContraPC implements AbstractFactoryJugadores
{
    public function darJugadorAdivinanza()
    {
        $numeroSecreto = NumeroSecreto::crear();
        return JugadorAdivinador::crear($numeroSecreto);
    }

    public function darJugadorNumero()
    {
        $consola = UtilConsola::crearManejadorConsola();
        return HumanoNumero::participar($consola);
    }
}
