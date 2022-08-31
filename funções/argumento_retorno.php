<div class="titulo">Argumentos e Retorno</div>
<?php 

function obterMensagem(){
    return 'seja bem vindo!';
}

//obterMensagem(); //ASSIM NAO RETORNA NADA, POIS NAO HÁ NADA DECLARADO NA FUNCAO
echo obterMensagem(); //ASSIM FUNCIONA PQ O FUNCAO RETORNA UMA STRING, LOGO O ECHO VAI IMPRIMIR A FUNCAO
 function obterMensagemComNome($nome){
     return "bem vindo, {$nome}!";
 }
echo '<br>', obterMensagemComNome('felipe'); //ASSIM SE ATRIBUI UM VALOR PRA UM PARAMETRO(OU ARGUMENTO)
echo '<br>', obterMensagemComNome('marcos');
echo '<hr>';

function soma($a, $b){
    return $a + $b;
}
echo '<br>', soma(4, 5); //ATRIBUINDO VALOR PROS NUMEROS DA SOMA

function trocaValor($a, $novoValor){
    $a= $novoValor;
}
$variavel= 1;
trocaValor($variavel,3); //O VALOR DA VARIAVEL NAO FOI MUDADO, VAI SER RETORNADO APENAS O 1
echo'<br>', $variavel;

function trocaValorDeVerdade(&$a, $novoValor){ //USANDO O &, O VALOR DA VARIAVEL MUDA
    $a = $novoValor;
}
TrocaValorDeVerdade($variavel, 5000);
echo '<br>', $variavel;

echo '<br>';
function palindromo($palavra){
    return $palavra === strrev($palavra) ? 'sim' : 'nao';
} //FUNCAO QUE DETERMINA OQ É PALINDROMO,O SRTREV DIZ SE A PALAVRA DE TRAS PRA FRENTE É A MSM COISA
echo palindromo('arara');
echo '<br>';
echo palindromo('ana');
echo '<br>';
echo palindromo('bola ');
echo '<br>';
echo palindromo('onibus ');

