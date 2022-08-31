<div class="titulo">Operações Aritmeticas</div>

<?php   
echo 1 +2.5 , '<br>';
echo 7 / 4 , '<br>';
echo round(7 / 4), '<br>'; //aki ele faz a divisao com arredondamento!
echo intdiv(7 , 4), '<br>'; //aki ele faz a divisao sem se preucupar com arredondamento;
echo 7 % 4 , '<br>'; // ele faz a divisao, porem com o resto da divisao como resultado;
//echo 7 / 0 , '<br>'; // divisao por 0 tende a dar o resultado "infinito";
echo 4 ** 2 , '<br>'; // ** significa exponenciação;

//Precedencia de operadores:
// () => ** => / * % => + -

echo '<p>Precedencia de operadores (exemplos)</p>';
echo 2 + 3 * 4 , '<br>';
echo (2 + 3) * 4 , '<br>';
echo 2 + 3 * 4 ** 2, '<br>';
echo ((2 + 3)* 4) ** 2;




?>