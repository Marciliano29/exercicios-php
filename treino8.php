<?php

$arquivo = __DIR__ . '/teste.json';

$abrirArquivo = file_exists($arquivo) . file_get_contents($arquivo); 
$cargaDedados = json_decode($abrirArquivo, true);

$novoDado = [
    "nome" => "Gabriel Marciliano",
    "ano" => 2024,
    "nota" => 9.1,
    "genero" => "Ficção Científica"
];

$cargaDedados [] = $novoDado;

$arquivoAtualizado = json_encode($cargaDedados);
file_put_contents($arquivo, $arquivoAtualizado);

echo "Dados adicionados!";
