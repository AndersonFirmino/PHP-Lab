<?php
/*
No php há funções anonimas assim como no Python e no Javascript.
E sua sintaxe é semelhante a do Javascript
**/

$func = function($nome) {
    echo "O nome enviado como parametro é $nome";
    echo "\n\n";
}; // <<-- importante observar que funções anonimas precisam do (;) no final de sua declaração

//Invocando uma função anonima atraves de uma outra função.
function teste($f) {
    $f("Programmer");
    echo "\n\n";
}


//invocando a função anonimas
$func("Anderson");
teste($func);

// Podemos usar funções auto invocaveis como no Javascript.
(function(){
    echo "\n\n";
    echo "função anonima igual do Javascript só que no PHP7";
    echo "\n\n";
})();
