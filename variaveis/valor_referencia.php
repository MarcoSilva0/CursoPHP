<div class="titulo">Valor vs Referêncis</div>

<?php
$var = 'Valor Inicial';
echo $var;

//atribuição por referência
$varValor = $var;
echo "<br>$varValor";
$varValor = 'Novo Valor';
echo "<br>$var";
echo "<br>$varValor";

//atribuição por referência
$varRef = &$var;
$varRef = 'Mesma Referencia';
echo "<br>$var e $varRef";
$varRef = 'Mudei agora todos mudam';
echo "<br>$var e $varRef";