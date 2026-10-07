<?php

// POO || OOP
class Funcionario {
    public $id;
    public $nome; /// null || undefined
    public $sobrenome;
    private $salario;
    public $cargo;
    public $setor;
    protected $cracha;

    public function obterSalario() {
        echo $this->salario;
    }

    public function setarSalario($salario) {
        $this->salario = $salario;
    }
}

$valor = 10;

$funcionario = new Funcionario(); // instanciar um objeto

$funcionario->nome = "Vitor";

$funcionario->setarSalario(10200);

 $funcionario->obterSalario() ;


class Caneta {
    public $cor = "";
    public $material = "";
    public $tampa = true;
    public $esfereografica = true;
    public $marca = "";

    public function escrever() {

    }

    public function verificarSeTemTinta() {

    }
}
