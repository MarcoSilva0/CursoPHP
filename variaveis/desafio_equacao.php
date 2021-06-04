<div class="titulo">Desafio Equação</div>
<?php
echo "Para esse desafio teremos que resolver a seguinte equação";
echo "<p>([6*(3+2)]²/3*2  -  ((1-5)*(2-7)/2)²)³ / 10³ </p>";

$numA = 6 * (3 + 2);
$numA = $numA ** 2;
$denA = 3 * 2;
$restA = $numA / $denA;


$numB = (1 - 5) * (2 - 7);
$denB = 2;
$restB = $numB / $denB;
$restB = $restB ** 2;

$restC = $restA - $restB;
$restC = $restC ** 3;

$denC = 10 ** 3;

$resultado = $restC / $denC;
echo "O resultado da equação é: " . $resultado;
