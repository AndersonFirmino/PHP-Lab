<?php
/*
 A partir do php 7 podemos usar tipagem de parametros
que nada mais é que ao criar funções podemos passar o tipo de variavel que ele deve receber

function func(int $num) {};

dependendo do caso o php converte o valor,
por exemplo foi pedido o tipo inteiro como parametro mas o usuario passou uma string numerica
php esperava 10
mas recebeu "10"

ele converte o valor para o tipo esperado. Mas havera erro se tentar abusar e passar um
caracter no lugar do tipo numerico mesmo se este estiver como string "10"

ele não acusa nenhuma exceção a menos que seja passado um
declare(strict_types=1);
com esta função no inicio do arquivo de código ele vai levantar uma exceção sempre que
um tipo não corresponder ao esperado em uma função.

E ele para o programa, do contrario ele procura converter o valor para o tipo esperado se possivel.

*/
declare(strict_types=1);

function get_area(int $x, int $y) {
    return $x * $y;
}

echo get_area(10, 5);
echo "\n\n";

function get_sum(int ...$valores) {
    return array_sum($valores);
}

echo get_sum(1, 2, 3, 4, 5, 6, '7');
echo "\n\n";
