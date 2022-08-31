<div class="titulo">Argumento padrão</div>
<?php 
function saudacao($nome = 'Senhor', $sobrenome = 'Cliente'){ //ATRIBUINDO VALORES PRA VARIAVEL, OU SEJA, ARGUMENTO PADRAO
return "Bem vindo, $nome $sobrenome! <br>";

}
echo saudacao();
echo saudacao('mestre', 'supremo');

function anotarPedido($comida, $bebida = 'água'){
echo "para comer: $comida <br>";
echo "para beber: $bebida <br>";
}
anotarPedido('Hamburguer'); // A VARIAVEL BEBIDA JA VEM AGUA POR PADRAO, NAO PRECISA ESCREVER
anotarPedido('Pizza', 'Refrigerante'); //MUDANDO O NOME DA VARIAVEL PADRAO
 // O ARGUMENTO PADRAO SEMPRE DEVE VIR DEPOIS DO ARGUMENTO OBRIGATORIO
 
