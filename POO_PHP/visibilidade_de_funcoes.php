<?php
/*
testando a visibilidade das funcoes, php
*/

class SuperClasse {
    public function func_public () { echo "funcPublicaMae\n"; }
    protected function func_protegida () { echo "funcProtegidaMae\n"; }
    private function func_privada() { echo "funcPrivadaMae\n"; }

    function super() {
        echo "Classe mãe\n";
        $this->func_public();
        $this->func_protegida();
        $this->func_privada();
        echo "---------------------\n";
    }
}

$super = new SuperClasse();
$super->super();


class SubClasse extends SuperClasse {
    public function func_public () { echo "funcPublicaFilha\n"; }
    protected function func_protegida () { echo "funcProtegidaFilha\n"; }
    private function func_privada() { echo "funcPrivadaFilha\n"; }

    // por padrão no php e no c++ quando um método é criado sem seu modificador de acesso
    // explicito, implicitamente ele é definido como publico.
    function __construct(){
    }

    function sub() {
        echo "Classe Filha\n";
        $this->func_public();
        $this->func_protegida();
        $this->func_privada();
        echo "---------------------\n";
    }
}

$obj = new SubClasse();
// $obj->super();
// $obj->sub();
