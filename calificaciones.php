<?php

class Calificaciones {
    private $calificacionAlice;
    private $calificacionBob;

    public function __construct($calificacionAlice, $calificacionBob) {
        $this->calificacionAlice = $calificacionAlice;
        $this->calificacionBob = $calificacionBob;
    }

    public function calcularPuntos() {
        $puntosAlice = 0;
        $puntosBob = 0;

        for ($i = 0; $i < 3; $i++) {
            if ($this->calificacionAlice[$i] > $this->calificacionBob[$i]) {
                $puntosAlice++;
            } elseif ($this->calificacionAlice[$i] < $this->calificacionBob[$i]) {
                $puntosBob++;
            }
        }
        return [$puntosAlice, $puntosBob];
    }
}

// Ejemplo propueso
$calificacionAlice = [17, 28, 30];
$calificacionBob = [99, 16, 8];

$desafios = new Calificaciones($calificacionAlice, $calificacionBob);
$resultado = $desafios->calcularPuntos();

echo "Calificaciones Alice: [" . implode(",", $calificacionAlice) . "] <br>";
echo "Calificaciones Bob: [" . implode(",", $calificacionBob) . "] <br>";
echo "Resultado: [" . implode(",", $resultado) . "]";