<div class="titulo">Recursividade</div>

<?php

function somaUmAte($numero){
    $soma = 0;
    for(; $numero >= 1; $numero--){
        $soma += $numero;
    }
    return $soma;
}
echo somaUmAte(10) . "<br>";

//Versão recursiva onde tem uma condição de parada e que diminuimos em problemas menores
function somaRecursiva($numero){
    if($numero === 1)
        return 1;
    return $numero + somaRecursiva($numero - 1);
}
echo somaRecursiva(7) . "<br>";