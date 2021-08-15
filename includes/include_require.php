<div class="titulo">Include vs Require</div>

<?php
echo 'Usando include com arquivo inexistente...<br>';
ini_set('display_errors', 1);
include('arquivo_inexistente.php');

echo 'Usando include com arquivo inexistente...<br>Se der erro ele nn executa mais nada abaixo<br>';
require('arquivo_inexistente.php')