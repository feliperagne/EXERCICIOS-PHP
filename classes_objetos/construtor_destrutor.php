<div class="titulo">Construtor e Destrutor</div>
<?php 
class Pessoa{
    public $nome;
    public $idade;

    function __construct($novoNome, $idade){
        echo 'Construtor invocado! <br>';
        $this -> nome = $novoNome; // ATRIBUTO NOME RECEBERÁ O VALOR IMPOSTO PELA VARIAVEL "novoNome" DURANTE A EXECUÇÃO DO CONSTRUTOR
        $this -> idade = $idade;
    }

    function __destruct(){
        echo 'morreu!';

    }

    public function apresentar(){
        echo "{$this ->nome}, {$this -> idade} anos<br>";
    }
}
$pessoa = new Pessoa('Rebeca maria' , 40); // PRECISAR DE PARAMETRO POR CAUSA DO CONSTRUTOR
$pessoa->apresentar();
unset($pessoa); //COMANDO PRA CHAMAR O DESTRUTOR

echo '<br>';
echo '<br>';

$pessoa2 = new Pessoa('Joao pedro' , 16); // PRECISAR DE PARAMETRO POR CAUSA DO CONSTRUTOR
$pessoa2->apresentar();
unset($pessoa2); //COMANDO PRA CHAMAR O DESTRUTOR

