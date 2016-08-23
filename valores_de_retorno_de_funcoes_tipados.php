<?php

/*
Assim como em diversas linguagens de programação como Java, C e C++
a partir do php7 podemos passar o tipo de retorno de uma função.
exemplo abaixo

se declarar como strict ele levanta uma exceção, do contrario dependendo do caso
o php tenta converter para o tipo de retorno.
*/

declare(strict_types=1);

function numero(int $n) : int {
    return $n;
}

echo numero(10);
echo "\n\n";
echo numero('10'); // esta chamada gera um erro, só para exemplificar
// funções com tipagem de retorno.
echo "\n\n";
