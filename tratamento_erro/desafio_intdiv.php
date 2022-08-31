<?php namespace aritmetica;

use Exception;

class naointeiroException extends \Exception{ //PRECISA DA / NO EXCEPTION PORQUE TA USANDO NAMESPACE

}
function intdiv($a,$b){
    if($b == 0 ){
        throw new \DivisionByZeroError();
    }
    if($a % $b > 0 ){ //% SIGNIFICA RESTO DA DIVISAO
        throw new naointeiroException();
    }
    return $a / $b; //OPERAÇAO QUE A FUNCAO DEVE FAZER
}