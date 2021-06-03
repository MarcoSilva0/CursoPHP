<div class="titulo">Operações Aritiméticas</div>

<?php
echo '1 + 1 = ',1 + 1, '<br>Ele reconhece que a soma é de n° inteiros ';
var_dump(1 + 1);
echo '.<br> <br>Mas se algum numero for quebrado ele converte para float como 1 + 2.5 = ';
echo 1 + 2.5, '<br><br> 10 - 2 = ';
echo 10 - 2, '<br>2 * 5 = ';
echo 2 * 5, '.<br> <br>Uma coisa interessante é mesmo que a divisão seja de inteiros ele retorna um valor float ex:<br>
7 / 4 = ';
echo 7 / 4, '<br>Para que o resultado seja inteiro pode utilizar a função intdiv() como no ex:<br> intdiv(7 / 4) = ';
echo intdiv(7, 4), '<br>';
echo 'Senão podemos usar o round(), para arredondar ou para cima ou para baixo ex:<br> round(7 / 4) = ', round(7 / 4), '<br>';
echo 'E para sabermos o resto usamos o modulo ex:<br> 7 % 4 = ', 7 % 4, '<br>';
echo '<br>Temos tambem a exponenciação que é demonstrado pelo seguinte jeito ex:<br>4 ** 2 = ', 4**2,'<br>';
echo '<br>E por fim a precedência de operadores se da pela seguinte ordem:<br>() => ** => /, *, % => +, -';