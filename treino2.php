<?php 

for ($contador = 0; $contador <= 100; $contador++) {
    if ($contador % 2 != 0) {
        //echo " $contador";
    }
}


$altura = 1.75;
$peso = 60;
$imc = $peso / ($altura * 2);


//echo "O seu IMC é: $imc!";


$hora = 16;

if ($hora > 6 && $hora< 12) {
    echo "Bom dia!";
} elseif ($hora >= 12 && $hora < 18) {
    echo "Boa tarde!";
} else {
    echo "Boa noite!";
}