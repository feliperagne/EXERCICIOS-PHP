<div class="titulo">Gerenciando Sessões</div>
<?php
session_start();
echo session_id(); //imprimir o id da sessão, ela muda toda vez que abrir o navegador
 
$contador = &$_SESSION['contador']; // o & faz com que o contador muda
$contador = $contador ? $contador + 1 : 1; //OPERAÇAO TERNARIA, REVER AULA
//SE CONTADOR ESTIVER SETADO -> CONTADOR + 1
//CASO O CONTRARIO -> ELE SETA COMO 1
echo '<br>' . $_SESSION['contador']; //VAI ADICIONAR UM NUMERO A CADA REFRESH DE PAGINA

if($_SESSION['contador'] % 5 === 0){ //QND O NUMERO MOSTRADO NA PAGINA FOR DIVISOR DE 5, VAI REGENERAR O ID
    session_regenerate_id();
}

if($_SESSION['contador'] >= 15){ //A CADA 15 REFRESH NA PAGINA, A SESSAO VAI SER DESTRUIDA E O CONTADOR REINICIADO
    session_destroy();
}
