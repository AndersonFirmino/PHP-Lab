<?php
/*
Relembrando como usar arrays em php
**/

$a = array(1, 2, 3); // array indexado, como listas no python

print_r($a);

printf("\n");

print($a[0]);

print("\n");

print("\n");

$frutas = array('frutas' => ["banana", "maca", "pera"]); // associativo, como dicionarios no python

print_r($frutas);

print("\n");

echo $frutas['frutas'][2];

print("\n\n");

// outras maneiras de usar arrays no php

$arr = [0, 1, 2, 3, 4];
print_r($arr);
print("\n\n");
// ou

$arr2 = [
    'valor1' => [0, 1, 2, 3, 4],
    'valor2' => [1, 2, 3, 4, 5]
];

print_r($arr2);
print("\n\n");


// Tambem podemos fazer desta forma onde os elementos são adicionados de forma automatizada e gerenciada pelo PHP

$arr[] = "Teste";

// podemos ir adicionando passando uma chave que não existe que ela sera criada e guardara o valor.
$arr[0] = "valor 0";
$arr[7] = "valor 0";
print("\n\n");

print_r($arr);
print("\n\n");

//podemos excluir um determinado elemento no php usando o unset

unset($arr[7]); // removeu o elemento 7 da memoria.
