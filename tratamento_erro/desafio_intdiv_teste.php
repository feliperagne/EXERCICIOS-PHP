<div class="titulo">Desafio intdiv com o arquivo "desafio_intdiv.php"</div>
<?php
require_once 'desafio_intdiv.php';

use function aritmetica\intdiv;

try{
    echo intdiv(8,3) . '<br>';
} catch(\aritmetica\naointeiroException $e){
    echo 'resultado nao é um número inteiro<br>';
}

try{
    echo intdiv(8,0) . '<br>';
} catch(DivisionByZeroError $e){
    echo 'é uma divisao por 0 <br>';
}

echo intdiv(8,2);