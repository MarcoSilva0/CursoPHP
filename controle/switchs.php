<div class="titulo">Switch</div>

<?php
$categoria = 'luxo';
$preco = 0.0;
$carro = '';

switch(strtolower($categoria)){
    case 'luxo':
        $carro = 'Mercedes';
        $preco = 250000;
    break;
    case 'SUV':
    case 'suv Básico':
        $carro = 'Renegate';
        $preco = 80000;
    break;
    case 'Popular':
        $carro = 'MOBI';
        $preco = 30000;
    break;
    default:
    $carro = 'MOBI';
    $preco = 30000;
    break;
}

$precoFormatado = number_format($preco, 2, ',', '.');
echo "<p>Carro: $carro<br>Preço: R$ $precoFormatado</p>";