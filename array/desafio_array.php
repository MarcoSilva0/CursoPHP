<div class="titulo">Desafio Array 1</div>

<?php
echo "No desafio tinhamos que entender o array e dizer qual era o resultado final sem executar o código<br>";

$lista = array(
    1,
    4 => 2,
    3 => 3,
    'a' => 4,
    5,
    '9' => 6,
    '06' => 7,
    0 => 8
);

//Array ( [0] => 8 [4] => 2 [3] => 3 [a] => 4 [5] => 5 [9] => 6 [06] => 7 )
print_r($lista);

?>