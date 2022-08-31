<?php
echo 'carregando include_arquivo<br>';
$variavel = 'estou definida';

if(!function_exists('soma')){ // METODO PARA ASSEGURAR A DEFINIÇAO DA FUNÇÃO (PODE OU NAO SER USADO)
function soma($a,$b){
    return $a+$b;
}
}