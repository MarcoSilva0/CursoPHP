<div class="titulo">Desafio For</div>
<!-- 
    temos que fazer no laço for imprimir isso
#
##
###
####
#####
1) usando incremento
2) sem usar incremento
-->
<?php
$h = '';
for($i = 0; $i <= 4; $i++){
    $h .= '#';
    echo "$h<br>";
}
echo "<hr>";
for($h2 = '#'; $h2 !== '######'; $h2 .= '#'){
    echo "$h2<br>";
}

?>