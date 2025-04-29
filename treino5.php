<?php

function funcaoCalcular (int $numero1, int $numero2, string $operacao): float {
    return match ($operacao) {
        'soma' => $numero1 + $numero2,
        'subtrair' => $numero1 - $numero2,
        'dividir' => $numero1 / $numero2,
        'multiplicar' => $numero1 * $numero2,
    };
}

echo funcaoCalcular (2,5,'multiplicar');


function calcularImc (float $altura, float $peso): float {
    return $peso / ($altura * 2);
}

echo calcularImc (60, 1.75);


function converter ($celsius) {
    return ($celsius * 9 / 5) + 32;
}

echo converter(25);