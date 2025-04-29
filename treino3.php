<?php

$array = [1, 2, 2, 3, 4, 4, 5];
$semDuplicatas = array_unique($array);


$alunos = [
    'Gabriel' => 10,
    'João' => 6,
    'Laura' => 5, 
];

foreach ($alunos as $nome => $nota) {
    if ($nota >=6 ) {
        echo "$nome Aluno aprovado e sua nota é $nota\n";
    } else {
        echo "$nome Aluno reprovado e sua nota é $nota\n";
    }
};


$conta = [
    'titular' => 'Gabriel Marciliano',
    'saldo' => 15000,
];

echo $conta['titular'] . ' possui ' . $conta['saldo']  . ' reais de saldo.';



$familiares = ['Alice', 'Bob', 'Charlie'];
$familiares[] = 'Davi';

var_dump($familiares);