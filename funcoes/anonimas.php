<div class="titulo">Funções Anônimas</div>

<?php
//$soma = function($a, $b){return $a + $b; };
$soma = function($a, $b){
    return $a + $b;
};

echo $soma(1, 2).'<br>';

//A função dentro da função é a anonima
//deixando ela flexivil e podendo chamar outras funçoes
function executar($a, $b, $op, $funcao){
    $resultado = $funcao($a, $b);
    echo "$a $op $b = $resultado<br>";
}

executar(2,3,'*',$soma);

$mult = function($a, $b){return $a * $b;};

executar(2,3,'*',$mult);