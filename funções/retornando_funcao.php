<div class="titulo">Retornando uma Função</div>
<?php 

function soma($a){
    return function($b) use ($a){
        return $a + $b;
    };
}
echo soma(13)(5); //VAI SOMAR O 13 COM O 5

$doisMais = soma(2);
echo '<br>', $doisMais(10);
echo '<br>', $doisMais(8);
