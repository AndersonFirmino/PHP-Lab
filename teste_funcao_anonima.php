<?php

/*
funções anonimas na pratica
*/

$quadrado = function($item) {
    return $item * $item;
};


function processa_lista ($lista, $func) {
    foreach($lista as &$item) {
        $item = $func($item);
    }
    return $lista;
}

// similar o que fazemos no Javascript.
print_r(processa_lista(range(1, 10), function($item){ // função anonima
    return $item - 10;
}));

echo "\n\n";
echo "Quadrado\n";
print_r(processa_lista(range(1, 10), $quadrado));
