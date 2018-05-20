<?php

namespace EB;

class Partida {

    private $consola;
    private $jugadorQuePiensaElNumero;
    private $jugadorQueAdivinaElNumero;
    private $demo;

    private function __construct(UtilConsola $consola) {
        $this->consola = $consola;
        $this->demo = false;
    }

    public static function crear(UtilConsola $consola) {
        return new Partida($consola);
    }

    public function configurar() {
        $this->consola->mostrar("Cual Modo de Juego desea utilizar");
        $opcion = $this->consola->leer();
        $this->definirTipoPartida($opcion);
    }

    public function definirTipoPartida($opcion) {
        switch ($opcion) {
            case "PC-HUMANO":
                $fabrica = new FactoryPCContraHumano();
                break;
            case "HUMANO-PC":
                $fabrica = new FactoryHumanoContraPC();
                break;
            case "PC-PC":
                $fabrica = new FactoryPCContraPC();
                $this->demo = true;
                break;
            default:
                $msg = "Modo No Soportado (por Defecto Juego Demo)";
                $this->consola->mostrar($msg);
                $fabrica = new FactoryPCContraPC();
                $this->demo = true;
                break;
        }
        $this->jugadorQuePiensaElNumero = $fabrica->darJugadorNumero();
        $this->jugadorQueAdivinaElNumero = $fabrica->darJugadorAdivinanza();
    }

    public function jugar() {
        $this->jugadorQuePiensaElNumero->pensar();
        $this->consola->mostrar("Se creó el numero Secreto.. cual es?");
        do {
            $this->jugadorQueAdivinaElNumero->pensar();
            $numeroDelAdivinador = $this->jugadorQueAdivinaElNumero->decir();
            $this->jugadorQuePiensaElNumero->analizar($numeroDelAdivinador);
            $simboloDelJugadorSecreto = $this->jugadorQuePiensaElNumero->decir();
            $this->jugadorQueAdivinaElNumero->analizar($simboloDelJugadorSecreto);
            if ($this->demo) {
                $this->consola->mostrar("El jugador 1 dice: $numeroDelAdivinador \n");
                $this->consola->mostrar("El jugador 2 dice: $simboloDelJugadorSecreto \n");
            }
            $condicion = $simboloDelJugadorSecreto !== "=";
        } while ($condicion);
    }

    public function seguirJugando() {
        $this->consola->mostrar("Seguir Jugando");
        $opcion = $this->consola->leer();
        if ($opcion === "SI") {
            return true;
        }
        return false;
    }

}
