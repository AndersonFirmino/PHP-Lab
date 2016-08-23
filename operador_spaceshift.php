<?php
/*
O operador spaceshift <=>
foi introduzido na versão 7 do php e ele verifica se o valor é
menor, igual e maior.
Ele faz 3 verificações.
sendo que se for menor retorna -1
se for igual ele retorna 0
se for maior ele retorna 1
**/
$x = 2;
$y = 0;
$relacao = $x <=> $y;

if ($relacao === 1) {
    echo "é maior";
    echo "\n\n";
}
