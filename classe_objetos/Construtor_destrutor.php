<div class="titulo">Construtor e Destrutor</div>

<?php 
class Pessoa{
    //atributos
    public $nome;
    public $idade;
    //metodo
    function __construct($novoNome, $idade){
        echo 'Construtor invocaodo<br>';
        $this->nome = $novoNome;
        $this->idade = $idade;
    }

    function __destruct()
    {
        echo "Destruindo!";
    }

    public function apresentar(){
        echo "{$this->nome}, {$this->idade} anos<br>";
    }

}

$pessoa = new Pessoa("Pedro", 40);
$pessoa->apresentar();
//chamando o destrutor
unset($pessoa);