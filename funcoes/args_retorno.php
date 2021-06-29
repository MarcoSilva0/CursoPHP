<div class="titulo">Argumentos e Paramentros de Retorno</div>

<?php
function obterMesagem(){
    return 'Seja bem vindo(a)!';
}

echo obterMesagem();

function soma($a, $b){
    return $a + $b;
}

echo "<br>". soma(46, 25);