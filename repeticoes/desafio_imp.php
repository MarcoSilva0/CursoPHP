<div class="titulo">Desafio Impressão</div>

<?php
/*
* Enunciado
* -Imprima apenas os valore do array que contém indice par
* -Desafio adicional: Resolva com o for e foreach
* -valores esperados: AAA, CCC, EEE
*/

$letras = array(
    "AAA",
    "BBB",
    "CCC",
    "DDD",
    "EEE"
);

for($i = 0; $i < count($letras); $i++){
    if($i % 2 === 0){
    echo "{$letras[$i]}<br>";
    }
}
echo "FIM!<hr>";
foreach($letras as $chave => $valor){
    if($chave % 2 !== 0) continue;
    echo "$valor<br>";
}


?>