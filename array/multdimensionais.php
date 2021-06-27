<div class="titulo">Arrays Multdimensionais</div>

<?php
$dados = [
    [
    "nome" => "Roberto",
    "idade" => 26,
    "naturalidade" => "São Paulo"
    ],
    [
    "nome" => "Maria",
    "idade" => 26,
    "naturalidade" => "Bahia"
    ]
];

print_r($dados);
echo "<br>". $dados[0]['nome'];
echo "<br>". $dados[0]['idade'];
echo "<br>". $dados[0]['naturalidade'];
echo "<br>". $dados[1]['nome'];
echo "<br>". $dados[1]['idade'];
echo "<br>". $dados[1]['naturalidade'];

?>