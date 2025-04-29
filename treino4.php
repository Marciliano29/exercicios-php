<?php 

    $conta = [
        'titular' => 'Gabriel Marciliano',
        'saldo' => 1500,
    ];
    
    echo "***********************\n";
    echo "Titular : " . $conta['titular'] . "\n";
    echo "Saldo atual:" . " R$ " . $conta['saldo'] . "\n";
    echo "***********************\n";


do {    
    echo  "1. Consultar saldo atual\n";
    echo  "2. Sacar valor\n";
    echo  "3. Depositar valor\n";
    echo  "4. Sair\n";
    
    
    $numero = (int)fgets(STDIN);
    
    switch ((int)$numero) {
        case 1:
            echo "***********************\n";
            echo "Titular : " . $conta['titular'] . "\n";
            echo "Seu saldo atual é: " . ($conta['saldo']) . "\n";
            echo "***********************\n";
            break;
    
        case 2: 
            echo "Qual valor deseja sacar? R$\n";
                $valorSaque = (int)fgets(STDIN);
                if ($valorSaque <= 0) {
                    echo "Saldo inválido para saque!\n";
                } elseif ($valorSaque > $conta['saldo']) {
                    echo "Saldo Insuficiente!\n";
                    break;
                } else {
                    $conta['saldo'] -= $valorSaque;
                    echo "Saque realizado com sucesso \n";
                    echo "Seu saldo atual é: " . ($conta['saldo']) . "\n"; 
                    break;
                }
    
        case 3: 
            echo "Qual valor deseja depositar? R$ \n";
                $valorDeposito = (int)fgets(STDIN);
    
                if ($valorDeposito <= 0) {
                    echo "Valor inválido pra deposito! \n";
                    break;
                } else {
                    $conta['saldo'] += $valorDeposito;
                    echo "Depósito foi realizado com sucesso! \n";
                    echo "Seu saldo atual é: " . $conta['saldo'] . "\n";
                    break;
                } 
    
        case 4: 
           echo "Obrigado! Adeus.\n";
           default: 
           echo "Opção inválida!\n";
           break;       
    }
    
} while ($numero != 4);


