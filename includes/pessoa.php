<?php
class Pessoa{
    public $nome;
    public $idade;
    public function __construct($nome, $idade){
        $this -> nome = $nome;
        $this -> idade = $idade;
        echo 'pessoa criada! <br>';
    }
    function __destruct()
    {
        echo 'pessoa diz: tchau!';
    }
    public function apresentar(){
        echo "{$this->nome}, {$this->idade} anos<br>";
    }
}