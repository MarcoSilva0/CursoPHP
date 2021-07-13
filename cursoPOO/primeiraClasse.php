<div class="titulo">Criando a primeira Classe(Caneta) - Aula 02 POO</div>

<?php
//classe caneta
class Caneta{
    //atribituos
    var $modelo;
    var $cor;
    var $ponta;
    var $carga;
    var $tampada;
    //metodos
    function rabiscar(){
        if($this->tampada ? print "<p>Tire a tampa primeiro para poder rabiscar</p>" : print "<p>Estou rabiscando</p>");
        
    }
    function tampar(){
        if($this->tampada ? print "<p>já estou tampada</p>" : $this->tampada = true);
    }
    function destampar(){
        if(!$this->tampada ? print "<p>já estou destampada</p>" : $this->tampada = false);
    }
}
//Primeiro Objeto
$c1 = new Caneta();
$c1->modelo = "bic";
$c1->cor = "Azul";
$c1->ponta = 0.5;
$c1->carga = 50;
$c1->tampada = false;
$c1->destampar();
$c1->rabiscar();
//Segundo Metodo




