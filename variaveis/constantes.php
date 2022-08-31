<div class="titulo">Constantes</div>
<?php 

define('TAXA_DE_JUROS', 5.9);
echo TAXA_DE_JUROS; //sem $ porque nao é variavel
echo '<br/>';
//CONTANTES SAO DADAS COM LETRA MAIUSCULA E SEPARADAS POR UNDERLINE
const NOVA_TAXA = 2.5;
echo '<br>' . NOVA_TAXA;

echo '<br> Linha:' . __LINE__; //mostra a linha q ta sendo escrita o codigo
echo '<br> Linha:' . __FILE__; //mostra a linha q ta sendo escrita o codigo
echo '<br> Linha:' . __DIR__; //mostra a linha q ta sendo escrita o codigo

