<div class="titulo">Usando Tipos</div>

<?php
function somar1($a, $b){
    echo "<span>Somando $a + $b =</span>";
    return $a + $b;
}

echo somar1(1, 2) .'<br>';
echo somar1(1.5, 2.2) .'<br>';
//echo somar1(1, '4três') .'<br>';

function somar2(int $a, int $b)
{
    # code...
    echo "<span>Somando $a + $b =</span>";
    return $a + $b;
}

echo somar2(1, 2) .'<br>';
echo somar2(1.5, 2.2) .'<br>';
//echo somar2(1, '4três') .'<br>';

//aqui eu faço converter na saida e nn na entrada
function somar3($a, $b): int{
    echo "<span>Somando $a + $b =</span>";
    return $a + $b;
}

echo somar3(1, 2) .'<br>';
echo somar3(1.5, 2.2) .'<br>';
//echo somar3(1, '4três') .'<br>';