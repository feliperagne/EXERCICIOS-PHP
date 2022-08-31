<div class="titulo">While/DoWhile</div>
<?php 
const VALOR_LIMITE = 5;
$contador = 0;
while ($contador < VALOR_LIMITE) {
    echo "while $contador <br>";
    $contador++;
}
echo '<hr>';

$contador=0;
do{
    echo "do-while $contador <br>";
    $contador++;
} while($contador < VALOR_LIMITE);

echo '<hr>';
?>
<div class="titulo">Desafio tabela</div>
<?php 
$matriz = [
    ['01', '02','03','04','05'],
    ['06', '07','08','09','10'],
    ['11', '12','13','14','15'],
    ['16', '17','18','19','20'],
];

foreach($matriz as $linha){
    foreach ($linha as $letra){
        echo "$letra"; 
    }
    echo '<br>';
}
?>
<table>
    <?php 
    foreach($matriz as $linha){
        echo '<tr>';
        foreach($linha as $letra){
        echo "<td>$letra</td>";
        }
        echo '</tr>';
    }
    ?>
</table>

<table>
    <?php 
    foreach($matriz as $index => $linha){ //PERCORRER INDEX DA MATRIZ - TABELA
        $style = $index % 2 === 1 ? 'background-color:lightblue;' : '';  //OPERADOR TERNARIO
        echo "<tr style='{$style}'>";
        foreach($linha as $letra){
            echo "<td>$letra</td>";
        }
        echo "</tr>";

        }
    ?>
</table>








<style>
table{
    border: 1px solid #444;
    border-collapse: collapse;
    margin:20px 0px;
}

table td{
    padding:10px 20px;
}
</style>
