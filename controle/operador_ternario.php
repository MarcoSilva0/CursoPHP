<div class="titulo">Operador Ternário</div>

<?php

$idade = 17;
$status;

//      Expressão  o '?' separa a expressão da resposta  Valor se for true :  Valor se for false
$status = $idade >= 18 ? 'Maior de idade' : 'Menor de idade';
echo "$status";