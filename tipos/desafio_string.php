<div class="titulo">Desafio String</div>

<?php

echo "Enunciado:<br>";
echo "Avaliando a documetação da string";
echo "<br>Qual o metodos que a posicao do texto 'abc'";
echo "<br>na string '!AbcaBcabc' retorne 1?";

//strpos encontre a posicao levanto e consideraçao letras maisucula
echo "strpos encontre a posicao levanto e consideraçao letras maisucula<br>";
echo "<br>".strpos("!AbcaBcabc", "abc");
//stripos econtra ignorando
echo "<br>"."stripos encontre a posicao levanto e consideraçao letras maisucula<br>";
echo stripos("!AbcaBcabc", "abc");