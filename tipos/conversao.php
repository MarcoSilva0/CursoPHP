<div class="titulo">Conversões de Tipos</div>

<?php
echo is_int(PHP_INT_MAX);

//Convertendo int para float
echo '<br>';
var_dump(PHP_INT_MAX + 1);
echo 'Se eu somar um numero inteiro com um float ele vira float';
$soma = 1 + 0.0;
echo "<br>1 + 0.0 = ". $soma . " = ";
echo var_dump($soma);
echo "<br><br>Conversão explicita onde eu falo para converter ex:";
echo var_dump((float) 3);

//float para int
echo "<br><br>Para converte de float para int tem que tomar cuidado pois alguns dados pode se perder";
echo "<br>Ex: ";
echo "var_dump((int)6.8) = ";
echo var_dump((int)6.8);
echo "<br><br>Outra maneira que podemos converte agora no caso string é com o var_dump(intval('110',(base)10)) = ";
echo var_dump(intval('110',10));
echo "<br><br>Para nn ter erro na hora de converter e arredondar usamos o round no var_dump";
echo "<br>Ex: var_dump((int) round(2.8)) = ";
var_dump((int) round(2.8));
