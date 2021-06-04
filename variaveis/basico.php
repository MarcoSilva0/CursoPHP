<div class="titulo">Variáveis básico</div>

<?php
echo "No PHP as variveis tem com obrigação começar com o simbolo de dolar $";
echo "<br>Ex: $ NumeroA";

echo "<br><p>Podemos fazer operações dentro das variáveis</p>";
echo "$ a = 3<br>";
echo "$ b = 2";
echo "<br>$ soma = $ a + $ b = ";
$a = 3;
$b = 2;
$soma = $a + $b;
echo $soma;
echo "<br><b>Diferente de muitas sintaxa do PHP a variavel é case sensitive RESPEITE-A</b>";
echo "<br>Use o isset para ver se a variavel está setada se retorna 1 está";
echo "<br>E para tirar o valor usa o uset ele nn retornara nada se tiver limpado";
echo "<br> Lembre-se o PHP nn é uma linguagem de tipagem forte";