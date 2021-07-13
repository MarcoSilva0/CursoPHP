<div class="titulo">Desafio Classe</div>

<?php

class Datas{
    //atributos
    public $dia = "01";
    public $mes = "01";
    public $ano = "1970";
    //metodo
    public function apresentar(){
        echo "Hoje é dia {$this->dia}/{$this->mes}/{$this->ano}";
    }
}

$data1 = new Datas();
$data1->apresentar();