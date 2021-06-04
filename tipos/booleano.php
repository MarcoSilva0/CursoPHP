<div class="titulo">Tipo Booleano</div>

<?php
echo "para o navegador nn existe tipos ele converte para texto então vai retornar um";
echo "<br>" . TRUE;
echo "<br>";
echo "TRUE = ";
echo var_dump(true);
echo "<br>".is_bool(false);
echo "<br>".is_bool("true");

//fazendo as regras de conversões
echo "<p>Regras:</p>";
echo "Covertendo o int/float para bool onde o 0 vai dar false os demais true:<br>";
echo "<br>" .var_dump((bool) 0);
echo "Até os negativos da true somente o 0 é false";
echo "<br>" .var_dump((bool) -2);
echo "<br>No caso das String se tiver só um 0 é false e dois 00 é true";
echo "<br>Com um '0' = ";
echo var_dump((bool) "0");
echo "<br>Com dois '00' = ";
echo var_dump((bool) '00');

