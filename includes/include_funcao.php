<div class="titulo">Include Função</div>

<?php
echo 'Carregando: include_funcao<br>';
function carregarArquivo(){
    include('include_arquivo.php');

    echo $variavel . '<br>';
    echo soma(2, 4) . '<br>';
}

echo "Novamente no arquivo include_arquivo<br>";
echo "Ele só carrega o soma que eu inclui caso eu invoque a função<br>";
carregarArquivo();
echo soma(1, 8);
