<div class="titulo">Erro Handler</div>

<?php
ini_set('display_errors' , 1);
//echo 4 / 0 . '<br>';

error_reporting(E_ERROR);
//echo 4/0 . '<br>';

error_reporting(E_ALL);
//echo 4/0 . '<br>';

error_reporting(~E_ALL);
//echo 4/0 . '<br>';
//include'arquivo_inexistente.php';

function filtrarmensagem($errno,$errstring){
    $text = 'include';
    return !!strpos("$errstring", $text);
}
set_error_handler('filtrarmensagem' , E_WARNING);   
echo 4/0 . '<br>';
include'arquivo_inexistente.php';

echo '<hr>';

restore_error_handler();

echo 4/0 . '<br>';
include 'arquivo_inexistente.php';