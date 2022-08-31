<div class="titulo">Includes em funções</div>
<?php
echo 'carregando arquivo: include_funcao<br>';
function carregararquivo(){
    include('include_arquivo.php');

    echo $variavel . '<br>';
    echo soma(2,5) . '<br>';
}
echo 'novamente no arquivo include_funcao<br>';
//echo soma(1,9) . '<br>';
carregararquivo();

echo "variavel = {$variavel}! <br>";
echo soma(4,9);