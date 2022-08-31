<div class="titulo">Interpolação</div>
<?php 
$numero = 10;
echo $numero;
echo '<br> $numero'; // nao vai mostrar nada
echo " <br> $numero"; // aspas duplas imprime a variavel, aspas simples nao

$texto = "sua nota é $numero";
echo "<br> $texto";

$objeto = 'canetas';
echo "<br> eu tenho 5 $objeto"; //pra interporlar, é necessario aspas duplas
