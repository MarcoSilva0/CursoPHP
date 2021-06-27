<div class="titulo">Desafio Sorteio</div>

<?php
echo "Nesse desafio temos que pegar o array e fazer ele exibir de forma aleatoria e exibir na tela";
$nomes = array(
    "Elza",
    "Rapunzel",
    "Branca de neve",
    "Cinderela"
);
$index = array_rand($nomes);
echo "<h1><center>$nomes[$index]</center></h1>";

?>