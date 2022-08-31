<div class="titulo">Mapa de Array</div>
<?php 
$dados = array(
    "idade" => 25,
    "cor" => "verde",
    "peso" => 49.8
);
print_r($dados);
echo '<br>' . $dados["idade"];
echo '<br>' . $dados["cor"];
echo '<br>' . $dados["peso"];

$lista[] = "i";//pra adicionar elementos na lista ,
//é necessario usar os colchetes dps da variavel, nesse caso eu 
//to adicionando 
//o elemento i na lista
echo '<br>';
print_r($lista);
echo '<br>';
?>

<?php
$meses = array(
    1 => "janeiro", //a lista de array sempre começa no 0, porem,desse jeito q foi feito ela começará no 1 e o restante dos elementos seguirão a ordem automaticamente
    "fevereiro",
    "março",
    "abril",
    "maio",
    "junho",
    "julho",
    "agosto",
    "setembro",
    "outubro",
    "novembro",
    "dezembro"
);

print_r($meses);
echo '<br>' . $meses[5];
echo '<br>' . $meses[12];