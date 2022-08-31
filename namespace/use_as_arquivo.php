<?php namespace nome\bem\grande; //nome do namespace
echo __NAMESPACE__ . '<br>';
const constante = 123;

function soma($a,$b){
    return $a+$b;
}
class classe{
    public $var;

    function func(){
        echo __NAMESPACE__ . '->' . __CLASS__ . '->' 
        . __METHOD__ . '<br>';
    }
}