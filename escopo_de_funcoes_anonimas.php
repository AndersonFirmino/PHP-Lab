<?php

/*
Quando usamos funções anonimas e queremos usar variaveis
que estão no escopo global.
tem uma sintaxe especial para dizer quais as variaveis que vamos usar do escopo global
quando estivermos dentro do escopo da função anonima.

porem o php faz copias das variaveis quando usamos o use e permite que
possamos alterar o valor delas.

Uma maneira de realmente alterar o valor das variaveis seria passar elas como
referencia, pois ai acessariamos o endereço em questão desta variavel e o valor
de fato seria alterado.

Ou poderiamos usar a palavra chave global que diria que a variavel $num que
vamos usar é a do escopo global.

*/

$num = 100;

$func = function() use($num) {
    global $num;
    $num = 10;
    echo "Anonima: " . $num;
    $num = 10;
    echo "\n\n";
};

$func();
echo $num;
