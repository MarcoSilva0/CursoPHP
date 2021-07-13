<div class="titulo">Herança</div>

<?php

//classe pai
class Pessoa{
    //atributos
    public $nome;
    public $idade;
    //construtor
    function __construct($nome, $idade){
        $this->nome = $nome;
        $this->idade = $idade;
        echo "Pessoa Criada! <br>";
    }
    //destrutor
    function __destruct()
    {
        echo "Destruindo!";
    }
    //metodos
    public function apresentar(){
        return "{$this->nome}, {$this->idade} anos";
    }
}

//classe filho que herda de pessoa
class Usuario extends Pessoa{
    //atributos a mais
    public $login;
    //construtor proprio
    function __construct($nome, $idade, $login){
        $this->nome = $nome;
        $this->idade = $idade;
        $this->login = $login;
        echo "Usuario Criado!<br>";
    }
    //destrutor proprio
    function __destruct(){
        echo "Usuário diz tchau!";
        //chamando do pai
        //parent::__destruct();
    }
    //metodo proprio
    public function apresentar()
    {
        echo "@{$this->login}: {$this->nome}, {$this->idade}";
        //ou pegando o apressentar do pai e add o do filho
        /*echo "@{$this->login}: ";
        parent::apresentar();*/
    }
}

$usuario = new Usuario("Marco Antonio", 19, "marco.ards00");
$usuario->apresentar();
echo "<br>";
unset($usuario);