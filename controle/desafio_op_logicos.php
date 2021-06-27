<div class="titulo">Desafio Operadores lógicos</div>

<?php

echo "Descrição:<br>";
echo "Carlos quiçá terá dois trabalhos extras um na terça e um na quinta!<br>";
echo @"-Se os dois forem executados ele compra a TV de 50' e leva todos para tomar sorverte<br>
       -Se apenas um for executado ele compra uma TV de 32' e leva todos para tomar um sorvete<br>
       -Se nenhum for feito ele ficará em gasta para não gastar!<hr>";
?>

<form action="#" method="post">
    <div>
        <label for="t1">Trabalho de Terça:</label>
        <select name="t1" id="t1">
            <option value="1">Executado</option>
            <option value="0">Não Executado</option>
        </select>
    </div>
    <div>
        <label for="t2">Trabalho de Quinta:</label>
        <select name="t2" id="t2">
            <option value="1">Executado</option>
            <option value="0">Não Executado</option>
        </select>
    </div>
    <button>Executar</button>
</form>
<style>
button, select{
    font-size 1.7rem;
}
</style>

<?php

$t1 = $_POST['t1'];
$t2 = $_POST['t2'];
if($t1 == 1 && $t2 == 1){
    echo "<hr>Vamos comprar a TV de 50' e leva todos para tomar sorverte";
}elseif ($t1 == 1 || $t2 == 1) {
    echo "<hr>Vamos comprar uma TV de 32' e leva todos para tomar um sorvete";
}else{
    echo "Vamos ficar em casa";
}
    

