<div class="titulo">Argumentos Variaveis</div>

<?php
function soma($a, $b){
    return $a + $b;
}

echo soma(14, 15, 6, 8, 9) . '<br>';

function somaCompleta(...$numeros){
    $soma = 0;
    foreach ($numeros as $num){
        $soma += $num;
    }
    return $soma;
}

echo somaCompleta(14, 15, 6, 8, 9);

//exemplo membros($titular, ...$dependentes(da para colocar vários sem se preocupar em criar var's))
/*
function membros($titular, ...$dependentes){
    echo "Titular: $titular<br>";
    if($dependentes){
        foreach($dependentes as $dep){
            echo "Dependentes: $dep<br>";
        }
    }
}

*/
