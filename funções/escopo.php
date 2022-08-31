<div class="titulo">Escopo e função</div>

<?php 
function imprimirMensagem(){ //assim se declara uma função
echo 'Olá! ';
echo 'ate a proxima!<br>';
}
imprimirMensagem();

$variavel = 1;
function trocaValor(){
    $variavel = 2;
    echo "durante a função: $variavel <br>";
}
echo "antes de função: $variavel <br>";
trocaValor();                               // O VALOR DA VARIAVEL NAO MUDOU, POIS SO MUDA O VALOR DENTRO DA FUNCAO
echo "depois da função: $variavel <br>";
 


function trocaValorDeVerdade(){
    global $variavel;               //O GLOBAL VAI MUDAR O VALOR DA VARIAVEL APOS A EXECUÇAO DA FUNCAO
    $variavel= 3;
    echo "durante a funcao: $variavel <br>";
}
echo "antes da funcao: $variavel <br>";
trocaValorDeVerdade();
echo "depois da funcao: $variavel <br>";




