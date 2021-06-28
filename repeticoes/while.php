<div class="titulo">While e DO While</div>
<?php
const VALOR_LIMITE = 5;
$contador = 0;

echo "<h6>Usando o While</h6>";
while($contatodor < VALOR_LIMITE){
    echo "While $contador <br>";
    $contador++;
    break;
}
echo "Fim!";
echo "<hr>";
echo "<h6>Usando o Do While</h6>";

do{
    echo "Do While $contador <br>";
    $contador++;
    break;
}while ($contatodor < VALOR_LIMITE);
echo "Fim!";

?>