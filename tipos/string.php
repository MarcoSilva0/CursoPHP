<div class="titulo">Tipo String</div>
<?php
echo 'Eu sou uma String';
echo '<br>';
var_dump("Eu também!!");
echo '<br>';

//Concatenação para juntar varias string
echo "Para concatenar usamos o ' . '<br>";
echo "'Nos tambem '."."' Somos'";

//Outro modo de imprimir é o print()
echo "<br> para imprimir podemos usar o print() e não só o echo";
print ("<br>Olá mundo!!");

//Funçoes de caixa alta e baixa
// str = string / to = para / upper ou lower
//caixa alta
echo '<br>' . strtoupper("maximizado inteiro");
//caixa baixa
echo '<br>' . strtolower("MINIMIZADO INTEIRO");
//somente a primeira
//uc = uppercasa firt = primeira
echo '<br>'. ucfirst("marco");
//todas a primeiras letras das palavras
echo '<br>'. ucwords("Todas as Primeiras");
//cacula quantas letra
echo '<br>'. "Quantas letras tem, contando as especiais" . strlen("Quantas letras tem, contando as especiais");
//stl len esolhendo o encode
echo '<br>' . mb_strlen("Marco", "utf-8");
//pegando só uma parte
echo '<br>' . substr("Só uma parte", 7, 6);
//substitur uma palavra na frase
echo '<br>' . str_replace('isso', 'aquilo', 'troca para isso');