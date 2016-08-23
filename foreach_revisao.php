<?php


$lista = ['domingo', 'segunda', 'Terça', 'quarta', 'quinta', 'sexta'];

foreach ($lista as $key => $value) {
    echo "$key - $value\n";
}

// no foreach do php ele recebe primeiro a lista/array e pode receber uma chave que
// sera um numero, e um valor que sera os valores da chave
// podemos omitir a chave

echo "\n\n";

$nums = range(0, 10);

/*
* O foreach naturalmente faz uma copia do valor da lista e passa para o $value
* e com isto não é possivel alterar o valor que esta em $value, porque é uma copia
* porem existe uma maneira de se fazer isto que é passando a referencia do valor usando
* & ecomercial assim como no c++ acessaremos o valor dentro do array (pois estamos acessando o endereço de memoria)
* ao fazer isto
* tornando possivel alterar o valor dentro do array.
*/

foreach ($nums as $key => &$value) {
    $value *= 10;
    echo $value ."\n";
}
print_r($nums);
