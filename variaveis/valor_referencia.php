<div class="titulo">Valor vs Referencias</div>
<?php 
$variavel = 'valor inicial';
echo $variavel;

// atribuição por valor

$variavelValor = $variavel;
echo '<br>' . $variavelValor;
$variavelValor = 'novo valor';
echo"<br> $variavel";
echo " $variavelValor";

//atribuição por referencia

$variavelReferencia = &$variavel;
$variavelReferencia = 'mesma referencia';

echo "<br>$variavel $variavelReferencia";