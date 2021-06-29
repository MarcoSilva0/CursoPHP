<div class="titulo">Desafio Palindro</div>

<?php
echo "O desafio pedido é criar uma função que verifica se a string é palindromo<br>";
echo "Será nescessário duas resposta uma com repetição e outra com o API da string";

function palindro($palavra){
    $palavra = '';
    $ultimoIndice = strlen($palavra) - 1;
    for($i = 0; $i <= $ultimoIndice; $i++){
        if($palavra[$i] !== $palavra[$ultimoIndice - $i]){
            return 'Não é um palindro';
        }
    }
    return 'É um palindro';
}

function palindroSimples($palavra){
    return $palavra === strrev($palavra) ? 'É um palindro': 'Não é um palindro';
}
?>
<form action="#" method="post">
<label><br>Digite uma palavra para verificar se é um palindro<br></label>
<input type="text" id='palavra' name="palavra">
<button onclick="<? echo palindro($palavra); ?>">Verificar</button>
</form>
<br>
<?PHP
$palavra = $_POST['palavra'];
echo "Usando o primeiro jeito: ". palindro($palavra) . "<br>Usando o segundo meio: " . palindroSimples($palavra);
?>

