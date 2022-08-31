<div class="titulo">Funções MAP e FILTER</div>
<?php
$notas = [5.8,7.3,9.8,6.7];
$notasfinais1 = [];

foreach($notas as $nota){
    $notasfinais1[] = round($nota); //FUNCAO Q ARREDONDA NUMEROS FLOAT
}
print_r($notasfinais1);
echo '<br>';

$notasfinais2 = array_map(round, $notas);
print_r($notasfinais2);

$apenasAprovados = [];
foreach($notas as $nota){
    if($nota<=7){
        $apenasAprovados[] = $nota;
    }
}
echo '<br>';
print_r($apenasAprovados);

function aprovados($nota){
    return $nota >=7;
}
echo '<br>';
$apenasAprovados2 = array_filter($notas, aprovados);
print_r($apenasAprovados2);