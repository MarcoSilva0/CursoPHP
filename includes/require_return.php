<div class="titulo">Require e Return</div>

<?php
$valorRetorno = require('include_retorno.php');

echo "$valorRetorno<br>";
echo "$variavelRetornada<br>";

echo __DIR__."<br>";

$valorRetorno2 = require(__DIR__.'/return_nao_usado.php');
echo "$valorRetorno2<br>";
echo "$variavelDeclarada<br>";