<div class="titulo">Atribuições</div>

<?php 
$title = 'atribuições';
$numero = 10;
echo '<br>' . $numero;
$numero = $numero - 3;
echo '<br>' . $numero;
$numero = $numero + 1.5;
echo'<br>' . $numero;
$numero--;  // aqui ele vai decrementar , ou seja, vai tirar uma unidade da variavel
echo '<br>' . $numero;
$numero++; // incremento (numero = numero + 1)
echo '<br>' . $numero;
$numero -= 5; //outro tipo de decremento, vai tirar 5 unidades
$numero += 5; //outro tipo de incremento , adiciona 5 unidades

$texto = 'esse é um texto';
$texto = $texto . ' qualquer ';
echo '<br>' . $texto;
$texto .= ' de verdade ';
echo '<br>' . $texto;