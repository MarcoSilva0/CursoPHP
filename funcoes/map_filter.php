<div class="titulo">Map e Filter</div>

<?php

//usei o map para pegar um array e jogar em outro com outros valores dado uma lógica
$notas = [5.8, 7.3, 9.8, 6.7];
$notasFinais = [];

foreach($notas as $nota){
    $notasFinais[] = round($nota);
}

print_r($notasFinais);

//filter eu filtro as notas dentro de uma array
foreach($notas as $nota){
    if($nota >= 7){
        $apenasOsAprovados1[] = $nota;
    }
}

echo '<br>';
print_r($apenasOsAprovados1);

//ou
function aprovados($nota){
    return $nota >=7;
}

echo '<br>';
//$apenasOsAprovados2 = array_filter($notas, aprovados);
//print_r($apenasOsAprovados2);

?>