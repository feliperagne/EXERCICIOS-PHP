<div class="titulo">Try/Catch</div>
<?php
//echo intdiv(7,0);
try{
    echo intdiv(7,0);
} catch(Error $e){
    echo 'teve um erro aki!<br>';
}

try{
    echo intdiv(7,0);
    throw new Exception('um erro aconteceu');
} catch(DivisionByZeroError $e){
    echo 'divisao por zero<br>';
} catch(Throwable $e){
    echo 'erro encontrado: ' . $e->getMessage() . '<br>';
} finally{ //parte sempre executada
    echo 'sempre sou executado!<br>';
}
echo 'execucao continua...';