<div class="titulo">Require com Return</div>
<?php
$valorretorno = require('return_usado.php');
echo "$valorretorno<br>";
echo "$variavelretornada<br>";

echo __DIR__ . '<br>';

$valorretorno2 = require(__DIR__ . '/return_nao_usado.php'); //OUTRO MEIO DE CHAMAR UM ARQUIVO POR MEIO DO REQUIRE
echo "$valorretorno2<br>"; //VAI RETORNAR UM VALOR BOOLEANO, NESSE CASO DA 1 PORQUE A VARIAVEL EXISTE
echo "$variaveldeclarada<br>";