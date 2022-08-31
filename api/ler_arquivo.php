<div class="titulo">Lendo Arquivos</div>
<?php

$arquivo = fopen('teste.txt', 'r');
echo fread($arquivo , 10);
echo '<br>';
echo fread($arquivo , 10);
fclose($arquivo);

echo '<hr>';

$arquivo = fopen('teste.txt', 'r');
echo fread($arquivo, filesize('teste.txt')); //comando pra ler o arquivo todo
fclose($arquivo);

echo '<hr>';

$arquivo = fopen('teste.txt', 'r');
echo fgets($arquivo), '<br>'; //comando para ler apenas 1 linha do arquivo 
echo fgets($arquivo), '<br>';
fclose($arquivo);

echo '<hr>';

$arquivo = fopen('teste.txt' , 'r');
while(!feof($arquivo)){
    echo fgets($arquivo);
}
fclose($arquivo);

echo '<hr>';

$arquivo = fopen('teste.txt' , 'r');
while(!feof($arquivo)){
    echo fgetc($arquivo), '<br>';
}
fclose($arquivo);

echo '<hr>';

$arquivo = fopen('teste.txt' , 'r+'); // o "r+" permite ler e escrever

    echo fgets($arquivo), '<br>';
    echo fgets($arquivo); '<br>';
    fwrite($arquivo, "\nVAMO SANTOS!!!");
    fclose($arquivo);