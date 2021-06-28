<div class="titulo">Desafio Tabela</div>

<?php
//1° temos que colocar esse array dentro de uma tabela
//2° temos que pintar as linhas zebradas
$matriz =[
    ['01', '02', '03', '04', '05'],
    ['06', '07', '08', '09', '10'],
    ['11', '12', '13', '14', '15'],
    ['16', '17', '18', '19', '20']
];

foreach($matriz as $linhas){
    foreach($linhas as $valor){
        echo "$valor";
    }
    echo "<br>";
}
echo "<hr>Resolução da primeira parte<br>";
?>
<table>
<?php
foreach($matriz as $linhas){
    echo '<tr>';
    foreach($linhas as $valor){
        echo "<td>$valor</td>";
    }
    echo '<tr>';
}
?>
</table>
<hr>Resolução da segunda parte<br>
<table>
<?php
foreach($matriz as $index => $linhas){
    $style = '';//o professor passou da seguinte forma  $style = $index % 2 === 1 ? $style = 'background-color: lightblue;': ''; e no if sem nada nos()
    if($index % 2 === 1){
        $style = 'background-color: lightblue;';
    }
    echo "<tr style='$style'>";
    foreach($linhas as $valor){
        echo "<td>$valor</td>";
    }
    echo "</tr>";
}
?>
</table>

<style>
table{
    border: 1px solid #444;
    border-collapse: collapse;
    margin: 20px 0px;
}
table tr{
    border: 1px solid #444;
}
table td{
    padding: 10px 20px;
}
</style>