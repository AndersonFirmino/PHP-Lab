<?php
/*
A duas maneiras de acessar variaveis de escopo global,

uma delas é usando o identificador global e o outro a variavel do tipo lista
$GLOBALS["var"] onde var é o nome da variavel em questao.
Lembrando que o cifrao ($) é somente um identificador ou seja passamos o nome
da variavel em questão direto.

o global do php fuciona de forma identica ao do python.
A diferença esta na variavel que é do PHP a $GLOBALS esta não existe no python
interessante reparar que ela que guarda todas as variaveis globais assim como
no Javascript temos o window que guarda todas as variaveis de escopo global.
Porem este GLOBALS retorna um array.
**/
$GLOBALS['programador'] = "Anderson";

print_r($GLOBALS);
echo "\n\n";
echo $GLOBALS["_SERVER"]["USERNAME"];
echo "\n\n";
print_r($GLOBALS['argv']);
echo "\n\n";
