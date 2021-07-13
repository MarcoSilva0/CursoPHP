<div class="titulo">Classe</div>

<?php

class Cliente {
    // atributos
    public $nome = 'Anônimo';
    public $idade = 18;
    //metodo
    public function apresentar(){
    echo "{$this->nome}  com a idade de  {$this->idade}<br>";
    }
}

//criando um clinte
$c1 = new Cliente();
$c1->apresentar();
//outro cliente
$c2 = new Cliente();
$c2->nome = "Marco";
$c2->idade= 19 ;
$c2->apresentar();