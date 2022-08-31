<?php namespace outro\nome; ?>
<div class="titulo">Use\As</div>

<?php
echo __NAMESPACE__ . '<br>';
include('use_as_arquivo.php');

function soma($a,$b){
    return $a * $b;
}

class classe{
    public $var;

    function func(){
        echo __NAMESPACE__ . '->' . __CLASS__ . '->' 
        . __METHOD__ . '<br>';
    }
}
echo \nome\bem\grande\constante . '<br>';

use const nome\bem\grande\constante; //A PARTIR DESSE PONTO, APENAS A CONSTANTE DESSE NAMESPACE SERÁ USADO
echo constante . '<br>';

use nome\bem\grande as ctx; //MUDEI O NOME DO NAMESPACE PARA CTX
use nome\bem\grande\classe as GrandeClasse;

echo soma(1,2) . '<br>'; //SERA USADO A FUNCAO SOMA DO OUTRO NAMESPACE
echo ctx\soma(1,2) . '<br>'; //USANDO A FUNCAO SOMA DO NAMESPACE CTX

//use function nome\bem\grande\soma; NAO FUNCIONA PORQUE JA TEM UMA FUNCAO SOMA NESSE NAMESPACE
use function nome\bem\grande\soma as somareal;
echo somareal(14,2) . '<br>';

$a = new classe(); 
$a->func(); //IMPRIME A FUNCAO DESSE ARQUIVO NORMALMENTE

$b = new \nome\bem\grande\classe(); //VAI IMPRIMIR A FUNCAO DO OUTRO ARQUIVO(QUE ESTÁ NO INCLUDE)
$b->func();

use \nome\bem\grande\classe as D; //MUDEI O NOME DA CLASSE DO ARQUIVO INCLUÍDO
$d = new D();
$d->func();
