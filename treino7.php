<?php 

$arquivo = __DIR__ . '/teste.json';

$lerArquivoTeste = fopen($arquivo, 'r');
    if ($arquivo) {
        $primeiraLinha = fgets($lerArquivoTeste);
        echo "Primeira Linha" . $primeiraLinha;
        fclose($lerArquivoTeste);
    } else {
        "Não foi possível abrir o arquivo.";
    }


// $lerArquivoTeste = file_get_contents($arquivo);

// echo $lerArquivoTeste;
