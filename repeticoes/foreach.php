<div class="titulo">Foreach</div>

<?php
$dias = array(
    "Segunda",
    "Terça",
    "Quarta",
    "Quinta",
    "Sexta",
    "Sabado",
    "Domingo"
);

foreach($dias as $valor){
    echo "$valor <br>";
}
echo "<hr>";
foreach($dias as $indice => $valor){
    echo "$indice => $valor <br>";
}
echo "<hr>";
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

foreach($matrix as $linhas){
    //echo "$linhas<br>";
    foreach($linhas as $valor){
        echo "$valor";
    }
    echo "<br>";
}
echo "<hr>";
$numeros = array(
  1,
  2,
  3,
  4,
  5  
);
foreach($numeros as $dobrar){
    $dobrar *= 2;
    echo "$dobrar<br>";
}
?>