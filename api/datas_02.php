<div class="titulo">Datas #02</div>

/*DIFERENTES TIPOS PARA IMPRESSAO DE DATAS EM PHP*/
<br>

<?php
$formatodata1 = 'D, d \d\e M \d\e Y';
$formatodata2 = '$A, %d de %B de %Y';
$formatodatahora = '%A, %d de %B de %Y - %H:%M:%S';

$agora = new DateTime();
//print_r($agora);
//echo '<br>';

echo $agora->format($formatodata1) . '<br>';

setlocale(LC_TIME, 'pt_BR');
echo strftime($formatodata2, $agora->getTimestamp()) . '<br>';

$amanha = new DateTime('-2 day');//imprime a data de 2 dias atras
echo strftime($formatodata2 , $amanha->getTimestamp()) . '<br>';
