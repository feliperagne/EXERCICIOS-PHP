<?php namespace contexto; ?>
<div class="titulo ">Básico sobre Namespace</div>


<?php
echo __NAMESPACE__ . '<br>'; // FUNÇAO PARA SABE QUAL O NOME DO NAMESPACE
const constante1 = 123;
define('contexto\constante2' , 234); //comando para definir uma variavel: define('nome do namespace\nome da constante', valor da constante);
define(__NAMESPACE__ . '\constante3' , 555);
define('outro_contexto\constante4', 456); //pode declarar uma constante mesmo com um namespace inexistente

echo constante1;
echo '<br>';
echo constante2 . '<br>';
//echo contexto\constante3 . '<br>';  ASSIM NAO VAI IMPRIMIR A CONSTANTE
echo \contexto\constante3 . '<br>'; //MESMO DANDO ERRO, ELE VAI IMPRIMIR A COSNTANTE
echo constant(__NAMESPACE__ . '\constante3') . '<br>';
echo \outro_contexto\constante4 . '<br>'; //ASSIM SE IMPRIME A COSNTANTE 4


function soma($a,$b){
    return $a+$b;
}
echo \contexto\soma(1,3); //ASSIM SE IMPRIME A FUNÇAO USANDO O NAMESPACE
echo soma(3,6); // PODE USAR O JEITO NORMAL DE IMPRIMIR A FUNCAO TBM
