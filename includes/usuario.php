<?php
require_once('pessoa.php');
class Usuario extends Pessoa{ //O COMANDO EXTENDS HERDA ATRIBUTOS DE UMA CLASSE PRA OUTRA
    public $login;
    function __construct($nome, $idade,$login){
        $this -> nome = $nome;
        $this -> idade = $idade;
        $this -> login = $login;
        echo 'usuário criado! <br>';
    }
    function __destruct(){
        echo 'usuario diz: tchau!<br>';
        parent::__destruct();//HERDAR O DESTRUTOR DA CLASSE HERDADA
    }
    public function apresentar(){
        echo "@{$this->login}: <br>";
        parent::apresentar(); //HERDAR FUNCAO DE OUTRA CLASSE
    }
}