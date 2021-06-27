<div class="titulo">Mapa</div>

<?php
$dados = array(
    "idade" => 25,
    "cor" => "pardo",
    "peso" => 65
);

//para imprimir o array nesse caso temos que passar o nome da variavel pois se nn ele nn exibe
echo "echo $ dados ['idade']<br>";
echo $dados["idade"]."<br>";
echo "echo $ dados ['cor']<br>";
echo $dados["cor"]."<br>";
echo "echo $ dados ['peso']<br>";
echo $dados["peso"]."kg<br>";

?>