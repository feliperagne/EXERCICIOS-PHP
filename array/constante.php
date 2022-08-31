<div class="titulo">Array constante</div>
<?php 
const FRUTAS = ['laranja' , 'abacaxi'];
//FRUTAS[0] = 'banana';  NAO É POSSIVEL ALTERAR, POR SER CONSTANTE
echo FRUTAS[0];

const CARROS = ["fiat" => 'Uno' , "ford" => 'fiesta'];
//CARROS[1] = 'BWM';  NAO PODE ADICIONAR ELEMENTOS
echo '<br>' . CARROS['fiat'];