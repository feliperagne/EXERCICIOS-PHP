<div class="titulo">Usando tipos</div>
<?php 
function somar1($a,$b){
    echo "<span>Somando $a + $b = </span>";
    return $a + $b;
}
echo somar1(2,4) . '<br>';
echo somar1(1.5,5.7) . '<br>';
echo somar1(1.5 ,'4dois'). '<br>'; //O PHP RECONHECE APENAS O NUMERO 4 DA STRING E SOMA NORMALMENTE

    function somar( int $a, int $b){
        echo "<span>Somando $a + $b = </span>";
    return $a + $b;
    }
    echo somar1(2,4) . '<br>';
echo somar1(1.5,5.7) . '<br>';
echo somar1(1.5 ,'4dois'). '<br>';

function somar3( $a, $b): int { // O " : INT " SIGNIFICA QUE O RESULTADO DADO NO RETORNO SERA TIPO INT
    echo "<span>Somando $a + $b = </span>";
return $a + $b;
}
echo somar3(2,4) . '<br>';
echo somar3(1.5,5.7) . '<br>';
echo somar3(1.5 ,'4dois'). '<br>';