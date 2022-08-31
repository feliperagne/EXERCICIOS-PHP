<div class="titulo">Variaveis</div>
<?php 
$numeroA = 13;
echo $numeroA, '<br>';
var_dump($numeroA);

echo '<br>';
$a = 3;
$b = 20;
$soma = $a + $b;
echo $soma;
echo '<br>';
echo isset($soma); // retorna 1 , pois esta setada.

$variavel = 10;
echo '<br>' . $variavel;

// nomes de variaveis

$var = 'valida';
$var2 = 'valida';
$VAR3 = 'valida';
$_var_4 = 'valida';
$vâr = 'valida'; // evitar acentos
//$5var = 'invalida';
?>

<div class="titulo">Desafio equação</div>
<?php 
$a= (6*(3+2)) **2/3*2;
$b= ((1-5)*(2-7)/2)**2;
$c = 10 ** 3;
 $conta = ($a - $b)**3/$c;

 echo $conta;





?>
