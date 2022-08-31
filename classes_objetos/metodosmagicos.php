<div class="titulo">Metodos mágicos</div>
<?php
//METODOS MAGICOS SAO FUNÇOES NO PHP QUE COMECAM COM OS 2 UNDERLINES
//PESQUISAR MAIS SOBRE ELES
class pessoa{
    public $nome;
    public $idade;

    function __construct($nome,$idade)
    {
        echo 'construtor invocado!<br>';
        $this->nome = $nome;
        $this->idade = $idade;
    }
    function __destruct()
    {
        echo 'morreu!';
    }
    public function __toString()
    {
        return "{$this->nome} tem {$this->idade} anos";
    }

    public function apresentar(){
        echo $this . '<br>'; // AKI O "THIS" REPRESENTA A FRASE INTEIRA QUE FOI ESCRITA NO TOSTRING
    }

    public function __get($attr)
    {
        echo "lendo atributo nao declarado: {$attr}<br>";
    }
    public function __set($attr, $valor){
        echo "alterando atributo nao declarado: {$attr}/{$valor}<br>";
}

    public function __call($metodo, $parametro) // O CALL "CRIA" UAM FUNÇAO NAO EXISTENTE NO CONTEXTO
    {
        echo "tentando executar o metodo ${metodo}";
        echo "<br>, com os parametros: ";
        print_r($parametro); //SE USA PRINT_R PORQUE A VARIAVEL PARAMETRO É UM ARRAY
    }

}
$Pessoa = new pessoa('Ricardo', 40);
$Pessoa->apresentar(); //chamando o __toString
echo $Pessoa, '<br>'; //chamando o __toString
$Pessoa->nome = 'Reinaldo'; //NESSE PONTO, FOI MUDADO O NOME  E LOGO DEPOIS A FUNCAO FOI IMPRESSA
$Pessoa->apresentar();// chamando o __toString

$Pessoa->$nomeCompleto = 'muito legal!'; //chamando o __set
$Pessoa->$nomeCompleto = 'muito legal!'; // chamando o __get
echo $Pessoa->nome; //acessando o atributo diretamente sem o uso do __get
echo '<br>';
$Pessoa->exec(1, 'teste', false, [1,2,3]); //chamando o __call
//AKI FOI CRIADO A FUNCAO PRA SER CHAMADA PELO CALL COM OS PARAMETROS