<div class="titulo">Laço For</div>

<?php
//uso o laço for para quando eu tenho em mente o limite de repetições por isso usamos o i
for($i = 1; $i <= 5; $i++)
    echo $i;

echo "<br>";

$dias = array(
    "Segunda",
    "Terça",
    "Quarta",
    "Quinta",
    "Sexta",
    "Sabado",
    "Domingo"
);
echo "<hr>Usando um array<br>";
for($i = 0; $i < count($dias); $i++)
    echo "{$dias[$i]}<br>";
    
echo "<hr>Usando uma matrix<br>";

$matrix = [
    [
        'a',
        'b',
        'c',
    ],
    [
        'd',
        'e',
        'f'
    ]
];

for($i = 0; $i < count($matrix); $i++){
    for($j = 0; $j < count($matrix[$i]); $j++){
        echo "{$matrix[$i][$j]} ";
    }
    echo "<br>";
}

?>