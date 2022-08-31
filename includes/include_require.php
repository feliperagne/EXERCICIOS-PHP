<div class="titulo">Include vs Require</div>

//O include nao impede voce de continuar seu codigo, ele nao da erro, dá apenas um aviso
//ja o require da um erro fatal, impedindo voce de continuar


<?php
ini_set('display_errors', 1); //COMANDO PARA MOSTRAR OS ERROS DO PHP

echo 'usando include com arquivo inexistente<br>';
include('arquivo_inexistente.php');


echo 'usando require com arquivo inexistente';
require('arquivo_inexistente');
echo 'nao achou mesmo...';