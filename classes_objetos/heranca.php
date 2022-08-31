<div class="titulo">Herança</div>
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
$usuario = new Usuario('felipe silveira', 19, 'lordfeeh');
$usuario->apresentar();
unset($usuario); //CHAMAR O DESTRUTOR
