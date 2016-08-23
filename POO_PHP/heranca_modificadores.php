<?php
// herança e modificadores de acesso no php

class SuperClasse{
    public $publico = 1;
    private $privada = 2;
    protected $protegido = 3;

    public function super() {
        echo "Super classe\n";
        echo $this->publico;
        echo "\n";
        echo $this->privada;
        echo "\n";
        echo $this->protegido;
        echo "\n";
        echo "----------------------------------\n";
    }
}

class SubClasse extends SuperClasse {
    // observe que as variaveis
    // com o acesso protegido e publico
    // quando criadas com o mesmo nome que a classe mãe elas são sobrescritas.
    public $publico = 5;
    private $privada = 6;
    protected $protegido = 7;


    public function sub(int $x) {
        $this->publico = $x;
        $this->privada = $x;
        $this->protegido = $x;
    }

    public function imprimir_valores() {
        echo "SubClasse \n";
        echo $this->publico;
        echo "\n";
        echo $this->privada;
        echo "\n";
        echo $this->protegido;
        echo "\n";
        echo "==================================\n";
    }

}


$teste = new SubClasse();
$teste->super();
$teste->imprimir_valores();
