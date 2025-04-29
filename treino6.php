<?php 

 $filme = [9, 5, 4, 10, 1,];

$maioresNotas = arsort($filme);

/*
a função arsort ordena de forma decrescente.
*/

var_dump($filme);

$maioresNotas = array_slice($filme,0,3);

/*array_slice é uma função pra recortar informações de um array
nesse caso do indice 0 ao 3, que serão as três maiores notas.
*/

var_dump($maioresNotas);


$transforme = 'Vinicius Dias,1997,Programador';
var_dump(explode(",", $transforme));


function arrayStrings (array $string): array {
    sort($string);
    return $string;
}

$string = ["K", "L", "M", "N", "A", "B", "U", "C"];
$stringOrdenada = arrayStrings($string);
print_r($stringOrdenada);
var_dump($stringOrdenada);



