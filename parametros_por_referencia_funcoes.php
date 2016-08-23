<?php
/*
* Da mesma maneira que usamos com variaveis podemos fazer com funções
Exatamente como nas linguagens C e C++, conseguimos pegar a referencia na memoria
do valor da variavel e não uma copia dela.

Assim todas as mudanças que fizermos no valor da variavel serão refletidas em todos os lugares que ela é chamada.
exemplo abaixo:
*/

$a = [1, 2, 3];


// este ira pegar a referncia do array $a e não uma copia da variavel.
// function func(&$arg) {
//     $arg[1] = 5;
//     print_r($arg);
// }
//
// func($a);
// print_r($a);

//função retornando a referencia
// basta adicionar o & comercial no retorno da função e na criação dela também.

function &func() {
    $a = [1, 2, 3];
    print_r($a);
    return $a;
}

$valor = &func();
print_r($valor);
