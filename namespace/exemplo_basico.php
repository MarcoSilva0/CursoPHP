<?php namespace financeiro; ?> <!-- Ele tem que ser a primeira sentença do arquivo -->
<div class="titulo">Exemplo Básico</div>

<?php 
    
    echo __NAMESPACE__ . "<br>";
    const CONSTANTE1 = 123; // por padrão constante tem só letras maiusculas
    define('constante2', 234); // é uma constante nn pode ser alterada depois
    define(__NAMESPACE__ . '\constante3', 345);
    define('outro_contexto\constante4', 456);
    
    echo CONSTANTE1 . '<br>';
    echo constante2. '<br>';

?>
