<div class="titulo">Include e Require ONCE</div>
<?php
ini_set('display_errors', 1);
include('include_once_arquivo.php');
//require('include_once_arquivo.php'); // VAI DA ERRO POIS DA FOI DECLARADA A FUNCAO QUANDO EU COLOQUEI O INCLUDE

echo "variavel = {$variavel}<br>";
$variavel = 'variavel alterada'; // AKI FOI MUDADO O NOME DA VARIAVEL E LOGO ABAIXO ESCRITA NOVAMENTE
echo "variavel = {$variavel}";
echo '<br>';

include('include_once_arquivo.php');
echo "variavel = {$variavel}<br>";
$variavel = 'variavel alterada'; // AKI FOI MUDADO O NOME DA VARIAVEL E LOGO ABAIXO ESCRITA NOVAMENTE
echo "variavel = {$variavel}<br>";

include_once('include_once_arquivo.php');
echo "variavel = {$variavel}<br>";

require_once('include_once_arquivo.php');
echo "variavel = {$variavel}";

