<div class="titulo">Atribuições</div>

<?php
echo "<p><b>Olhe o código fonte!</b></p>";

$numero = 10;
echo '<br>' . $numero;
$numero = $numero - 3;
echo '<br>' . $numero;
$numero = $numero + 1.5;
echo '<br>' . $numero;
// quando colocamos o sinal no meio é um infix podemos colocar antes ou depois
//Exemplo:
$numero++;
echo '<br>' . $numero;
--$numero;
echo '<br>' . $numero;
//Posso fazer de forma - * / + ele pega atual e faz a conta
//exemplo
$numero -= 2;
echo '<br>' . $numero;
$numero *= 2;
echo '<br>' . $numero;
//Ou então posso concatenar
$numero .= 2;
echo '<br>' . $numero;
//podemos colocar ?? para dar um valor padrão
$varInexistente = 'aoba';
$valor = $varInexistente ?? 'Uai';
echo '<br>' . $valor;