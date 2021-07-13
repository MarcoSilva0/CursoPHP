<div class="titulo">Visibilidade</div>
<?php
// vamos usar os três modificadores de acesso public, protected e private

class A{
    //atributos
    public $publico = "Público";
    protected $protegido = "Protegido";
    private $privado = "Privado";
    //metodos
    public function mostrarA(){
        echo "Class A) Publico = {$this->publico}<br>";
        echo "Class A) Protegido ={$this->protegido}<br>";
        echo "Class A) Privado = {$this->privado}<br>";
    }

    private function naoMostrar(){
        echo 'Não vou imprimir';
    }
}
//Para ver o privado é só dentro da classe atráves de funções
//só acesso os protegidos uma função ou herença como visto a seguir
$a = new A();
echo $a->publico. "<br>";
//echo $a->protegido;
//echo $a->privado;
$a->mostrarA();

class B extends A{
    public function mostrarB(){
        echo "Class B) Publico = {$this->publico}<br>";
        echo "Class B) Protegido ={$this->protegido}<br>";
        echo "Class B) Privado = {$this->privado}<br>";
    }
}
echo "<br>";
$b = new B();
$b->mostrarB();
//E para ver o privado é só dentro da classe atráves de funções