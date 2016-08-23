<?php
/*
* São variaveis que são criadas usando dois cifroes $$ e podem ser chamadas usando o valor da variaveis anterios
* vide o exemplo abaixo
*/

$varvar = "Anderson";

$$varvar = "PHP é interessante";

echo $varvar;
echo "\n";
echo $$varvar;

echo "\n";
echo $Anderson;
echo "\n";
