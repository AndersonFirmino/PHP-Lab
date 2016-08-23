<?php
/*
foi implementado na versão 7 do php

funciona como usar a função empty() e isset()
mas no caso este operador verifica se existe um determinado valor na variavel
caso contrario ele ira retornar algum valor definido a direita: exemplo abaixo

$ddd = $_GET['ddd'] ?? "00"; // repare que aqui ele espera dar get no ddd caso contrario
// ele retorna para a variavel o valor 00

Ele verifica se o valor esta contido na variavel array
podemos acrescentar varios null coalescing seguidos | exemplo abaixo
$ddd = $_GET['ddd'] ?? $_GET['telefone'] ?? "00";
*/

echo "Passe esta chave para ver ele em ação -> ?ddd=11&telefone=1234-5678 <br><br>";

$ddd = $_GET['ddd'] ?? "00";
$telefone = $_GET['telefone'] ?? "0000-0000";

echo "Tel: ($ddd) $telefone";


echo "<br>";

// Usando o pré a formatação fica igual o debug no terminal do script.
echo "<pre>";
print_r($_GET);

// verifica se a variavel existe.
if (isset($_GET['x'])) {
    echo "veio";
} else {
    echo "não existe";
}

echo "<br>";
// testando null coalescing
echo "Valor: " . ($_GET['x'] ?? "não tem");
