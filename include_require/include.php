<?php
/*
Usando importação de arquivos.

include() // este aqui procura o arquivo mas se o mesmo não for encontrado,
o programa continua normalmente. Só é levantado uma mensagem de alerta.
require() // este aqui procura o arquivo mas se não encontrar levanta uma exceção e para o programa.

temos também os
include_once(); //Faz o mesmo que a include, com a diferença que verifica se o arquivo ja foi incluido para
que ele não seja incluido duas vezes
e
require_once(); //Faz o mesmo que a require, com a diferença que verifica se o arquivo ja foi incluido para
que ele não seja incluido duas vezes
**/

function dizer_ola() {
    echo 'ola';
}
