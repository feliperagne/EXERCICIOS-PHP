<div class="titulo">Função anonima</div>
<?php 

$soma = function($a,$b){ //UMA VARIAVEL RECEBENDO UMA FUNCAO
    return $a + $b;
};
echo $soma(1,5) . '<br>';

function executar($a,$b,$op,$funcao){
    $resultado = $funcao($a,$b);            // UMA FUNCAO DENTRO DE OUTRA FUNCAO
    echo "$a $op $b = $resultado<br>";
}
executar(2,3,'+',$soma);

$multiplicacao = function($a,$b){
    return $a * $b;
};
executar(2,5,'*',$multiplicacao);
