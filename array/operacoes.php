<div class="titulo">Operações</div>

<?php
$dados1 = array(
    "nome" => "Jose",
    "idade" => 28
);

$dados2 = array(
    "naturalidade" => "Fortaleza"
);

$dadosCompletos = $dados1 + $dados2;

print_r($dadosCompletos);

?>