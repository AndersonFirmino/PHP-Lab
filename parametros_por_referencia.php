<?php
/*
Assim como nas linguagens C e C++ podemos fazer referencia de parametros e variaveis
também no PHP

utilizando o operador ecomercial (&)
quando fazemos isto dizemos que determinada variavel ou parametro aponta para
o endereço de memoria em questão;

exemplo abaixo
*/

$a = [1, 2, 3];
$b = &$a; // observe que nesta linha b recebe o endereço de memoria de a
// logo tudo que acontecer com a b tera os mesmos valores, e a mesma coisa o a;
echo "\n\n";
print_r($a);
echo "\n\n";
print_r($b);

echo "\n\n";

$a[1] = 20;

echo "\n\n";
print_r($a);
echo "\n\n";
print_r($b);
