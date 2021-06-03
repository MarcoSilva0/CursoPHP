<div class="titulo">Desafio</div>

<p>O desafio é fazer o resultado ser impresso na tela usando PHP</p>
<?php
$soma = 4+4;
?>
<!-- Optei por tentar diferenciar os meios de exibir, existia
formas mais fácil e otimizada, fiz para treinar oq foi aprendido-->
<ul>
    <li>1 + 1 = <?= 2 ?></li>
    <?= '<li>4 + 4 = ' . $soma  . '</li>' ?>
    <?php echo"<li>8 + 8 =" .  8*2 . "</li>
</ul>";