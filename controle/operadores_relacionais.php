<div class="titulo">Operadores Relacionais</div>

<?php
echo "Operador de igual = var_dump(1 == 1) = ";
var_dump(1 == 1);
echo "<br>Operador de maior = var_dump(1 > 1) = ";
var_dump(1 > 1);
echo "<br>Operador de menor = var_dump(1 < 1) = ";
var_dump(1 < 1);
echo "<br>Operador de menor ou igual = var_dump(1 <= 1) = ";
var_dump(1 <= 1);
echo "<br>Operador de maior ou igual = var_dump(1 >= 1) = ";
var_dump(1 >= 1);
echo "<br>Operador de igualdade estrita string e int = var_dump(1 === 1) = ";
var_dump(1 === 1);
echo "<br>Operador de diferença = var_dump(1 != 1) = ";
var_dump(1 != 1);
echo "<br>Operador de diferença e igualdade = var_dump(1 !== 1) = ";
var_dump(1 !== 1);

echo '<p>Spaceship</p><hr>';
var_dump(500 <=> 3);
var_dump(50 <=> 50);
var_dump(5 <=> 50);

?>

<style>
p{
    margin-bottom: 0px;
}
hr {
    margin-top: 0px
}
</style>