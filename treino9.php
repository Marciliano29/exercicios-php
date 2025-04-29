<?php 

$string = '{"nome":"Vinicius","anoNascimento":1997,"profissao":"Dev"}';

$converter = json_encode($string);

var_dump($converter);