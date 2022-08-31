<div class="titulo">Datas #01</div>
<?php
echo time() . '<br>'; //mostra a qnt de segundos que se passaram desde 1 de janeiro de 1970
echo date('D, d \d\e M \d\e Y') . '<br>'; //ASSIM SE IMPRIME A DATA EXATA DO DIA, É MELHOR VER MAIS TIPOS NA DOCUMENTACAO DO PHP
echo strftime('%A , %d de %B de %Y', time()) . '<br>';
setlocale(LC_TIME , 'pt_BR', 'pt-BR.utf-8');

$amanha = time() + (24*60*60);
echo strftime('%A , %d de %B de %Y', $amanha); //exibir a data de amanha!!

echo '<br>';

$proximasemana = strtotime('+1 week');
echo strftime('%A , %d de %B de %Y', $proximasemana);

echo '<br>';

$datafixa = mktime(23,30,12,2,30,2003);
echo strftime('%A , %d de %B de %Y- %H:%M:%S', $datafixa); 
