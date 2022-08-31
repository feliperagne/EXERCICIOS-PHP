<div class="titulo">Basico de Array</div>
<?php 
$lista = array(1, 2, 3.4,"texto");
echo $lista . '<br>';
var_dump($lista);
echo '<br>';
print_r($lista); //escreve a lista assim como o indice de cada elemento dela

$lista[0] = 1234; // mudando o valor do indice do array

echo '<br>' . $lista[0]; // aki eu to acessando o primeiro elemento do array
echo '<br>' . $lista[1]; // aki eu to acessando o segundo elemento do array
echo '<br>' . $lista[2]; // aki eu to acessando o terceiro elemento do array
echo '<br>' . $lista[3]; // aki eu to acessando o quarto elemento do array
//se colocar um indice inexistente dentro do array, vai retornar NULL;

