<?php
/*
Testando funções
*/

function minhaFunc() {
    echo "E aew PHP";
    echo "\n";
}

minhaFunc();


function somar($valor1, $valor2) {
    $soma = $valor1 + $valor2;
    echo "A soma é {$soma}";
    echo "\n";
}

somar(2, 3);

/*
funções com lista de parametros
*/

function soma_2() {
    $total = func_get_arg(0) + func_get_arg(1);
    echo "Total de parametros passados: ". func_num_args();
    echo "\n\n";
    print_r(func_get_args());
    echo "\n\n";
    echo "\n\n";
}

soma_2(1, 2, "Teste", True);

function soma_tudo() {
    $lista = func_get_args();
    $qtd = func_num_args();
    $total = 0;

    for ($i = 0; $i < $qtd; $i++) {
        $total += $lista[$i];
    }
    echo "\n\n";
    echo "A soma de todos os parametros é $total";
    echo "\n\n";
}


soma_tudo(1, 2, 3, 4);

// Como no ecmascript 6, e a regra para ter outros parametros é também a mesma.
// devemos passar-los antes do ...$var
function variadicas(...$valores) {
    echo "\n\n";
    print_r($valores);
}

variadicas(1, 4, 3, 2, 5, 7);
