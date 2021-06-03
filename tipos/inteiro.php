<div class="titulo">Tipo Inteiro</div>

<?php
echo 11;
echo '</br>';
/*var_dump ele olha a variavel e da
algumas informações das variavel*/
var_dump(11);

echo '</br>';
//qual o inteiro max que minha maquina suporta
echo PHP_INT_MAX . " inteiro maximo suportado na minha máquina.</br>";
echo PHP_INT_MIN . " inteiro minimo suportado na minha máquina.</br>";
//o zero faz com que ele leia o numero na base octal
echo 017 . ' Numero feito na base octal<br>';
//o 0b faz com que seja a base binaria
echo 0b11001101, ' Numero feito em binario<br>';
//o 0x é hexadecimal;
echo 0xFFF, ' Base hexadecimal';