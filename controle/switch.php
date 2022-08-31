<div class="titulo">Switch</div>
<?php 
$categoria = 'luxo';
$preco = 0.0;
$carro = '';

if($categoria === 'luxo'){
    $carro = 'mercedes';
    $preco = 250000;
} elseif($categoria ==='SUV'){
    $carro = 'renegade';
    $preco = 80000;
} elseif ($categoria === 'sedan'){
    $carro = 'etios';
    $preco = 55000;
} else{
    $carro = 'mobi';
    $preco = 33000;
}
$preçoformatado = number_format($precoformatado, 2 ,',', '.');
echo "<p>Carro: $carro<br> Preço: $preco</p>";

// SWITCH

$categoria = '???';
switch(strtolower($categoria)){
    case 'luxo':
        $carro = 'mercedes';
        $preco = 250000;
        break;
    case 'suv':
        $carro = 'renegade';
        $preco = 80000;
        break;
    case 'sedan':
        $carro = 'etios';
        $preco = 55000;
        break;
    default: //COMO SE FOSSE O "ELSE"
    $carro = 'mobi';
    $preco = '33000';
    break;
} // ELE VAI MOSTRAR O MOBI PQ A VARIAVEL NAO FOI DEFINIDA NO COMEÇO, LOGO A ULTIMA OPÇAO (MOBI) É OQ VALE
$precoformatado = number_format($preco , 2, ',' , '.');
echo "<p>Carro: $carro<br> Preço: $precoformatado</p>";
?>


