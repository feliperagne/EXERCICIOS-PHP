<div class="titulo">Conversões</div>

<?php 
echo is_int(PHP_INT_MAX); // retorna 1, pois esse valor é int!
echo '<br>';

//int para float
var_dump(PHP_INT_MAX + 1); // será float porque passou do valor inteiro maximo
echo '<br>';
var_dump(1 + 1.0);
echo '<br>';
var_dump((float)3);

//float para int
echo '<p>Float para int</p>';
var_dump((int)6.8);
echo '<br>';
var_dump(intval(2.999)); //sera convertido para int porem mostrando o principal numero inteiro, nesse caso é o 2
echo '<br>';

//operaçoes com string
echo '<p>Strings</p>';
var_dump(3 + "2");
echo '<br>';
var_dump(1 + "cinco");
echo '<br>';
var_dump(1 + "5 cinco");
echo '<br>';
var_dump(1 + "-3.2e2");
echo '<br>';
var_dump((float) "10.5");
