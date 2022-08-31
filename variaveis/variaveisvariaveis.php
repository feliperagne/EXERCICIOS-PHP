<div class="titulo">Variaveis Variaveis</div>

<?php 
$a = 'valorA';
$$a = 'valorAA';
echo "$a {$$a}"; //para interpretar o dólar 2 vezes, precisa ser entre chaves

echo '<br>';
$epa = 'opa';
$opa = 'vish';
$vish = 'eita!!';
echo "$epa {$$epa} {$$$epa}"; // cada $ representará uma variavel;