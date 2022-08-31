<?php
echo 'carregando: include_once_arquivo<br>';
$variavel = 'estou definida';
if(!function_exists('soma')){
function soma($a,$b){
    return $a+$b;
}
}