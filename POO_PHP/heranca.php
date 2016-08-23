<?php

// herança poo
class SuperClasse {
    public $a = "variavel a";

    public function ini(){
        echo "SuperClasse->ini()";
    }
}


class SubClasse extends SuperClasse {

}

$sub = new SubClasse();

$sub->ini();


/*
Se a classe mae e a filha tivessem
uma variavel com o mesmo nome de acesso public
ambas estariam apontando para o mesmo endereço de memoria.
*/
