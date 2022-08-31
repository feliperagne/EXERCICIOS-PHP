<div class="titulo">Escrevendo Arquivos</div>
<?php

$arquivo = fopen('teste.txt' , 'w'); //o W é o modo write para o arquivo 
fwrite($arquivo, "valor inicial\n"); // \n para quebrar linha
$str = "segunda linha\n";
fwrite($arquivo , $str);
fclose($arquivo);

$arquivo = fopen('teste.txt', 'w');
fwrite($arquivo, "Novo conteúdo\n");
fclose($arquivo);

$arquivo = fopen('teste.txt' , 'a'); //"a" de acrescentar, um modo diferente
fwrite($arquivo, "com novos valores\n");
fwrite($arquivo , "adicionados num segundo momento");
fclose($arquivo);

ini_set('display_errors' , 1);
$arquivo = fopen('teste.txt' , 'x'); // o 'x' cria um arquivo apenas se ele for inexistente, e como esse ja existe, o codigo mostra um erro
