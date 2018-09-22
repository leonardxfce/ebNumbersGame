<?php

namespace EB;

interface Jugable
{
    public function analizar($datoDelOtroJugador);

    public function pensar();

    public function decir();
}
