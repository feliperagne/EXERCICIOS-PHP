<div class="titulo">Erros Personalizados</div>
<?php
class faixaetariaException extends Exception{
    public function __construct($message, $code = 0, $previous = null)
    {
        parent::__construct($message,$code,$previous);     
    }
}
function calculartempoaposentadoria($idade){
    if($idade<18){
        throw new faixaetariaException('ainda está muito longe!');
    }
    if($idade>70){
        throw new faixaetariaException('ja deveria estar aposentado faz tempo!');
    } 
    return 70 - $idade; //CALCULO Q SERÁ REALIZADO
}

$idadesavaliadas = [15,30,60,80]; //IDADES QUE SERAO AVALIADAS ESTAO DENTRO DO ARRAY
 
foreach($idadesavaliadas as $idade){
    try{
        $temporestante = calculartempoaposentadoria($idade);
        echo "idade: $idade, $temporestante anos restantes<br>";
    } catch(faixaetariaException $e){
        echo "nao foi possivel calcular o tempo para $idade anos<br>";
        echo "motivo: {$e->getMessage()}<br>";
    }
}
echo 'fim!';