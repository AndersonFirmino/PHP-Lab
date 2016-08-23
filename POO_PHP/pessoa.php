<?php

// Praticanto POO em php

class Pessoa {
    //var $variavel; //forma antiga de usar o public no php
    // desaconselhado de se usar.
    public $nome;
    public $idade;

    // conctrutor para classes php
    function __construct($nome, $idade) {
        echo "<pre>";
        var_dump($this);
        $this->nome = $nome;
        $this->idade = $idade;
    }

    //destrutor em php, são semelhantes a linguagem C++
    /*
        Apesar de podermos utilizar a função destrutora explicitamente
        não é responsabilidade do programador destruir a instancia do objeto da memoria
        pois temos o garbage collector que é o responsavel por remover da memoria
        objetos que já não estão sendo mais utilizados.
    */
    function __destruct() {
        echo "Função destrutora invocada";
    }


    public function get_idade() {
        return $this->idade;
    }

    public function set_idade($idade) {
        if ($idade > 0) {
            $this->idade = $idade;
        } else {
            echo "A idade informada é invalida";
        }
    }

    // get - pegar
    // set - setar

}

// $ps = new Pessoa();
// $ps->set_idade(23);
//
//
//
// echo " <br> {$ps->get_idade()}";
// $ps1 = new Pessoa();
//
// echo "<pre>";
// var_dump($ps);
// var_dump($ps1);


$p1 = new Pessoa("Anderson", 23);

echo "<pre>";
var_dump($p1);

//unset($p1);
