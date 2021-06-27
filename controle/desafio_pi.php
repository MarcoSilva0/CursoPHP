<div class="titulo">Desafio PI</div>

<?php
echo pi();
$pi = 3.14;

echo "<br>" . ($pi - pi());
if($pi - pi() <= 0.1){
    echo "<br>Praticamente iguais";
}