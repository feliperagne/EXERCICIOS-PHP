<div class="titulo"> Primeira Classe</div>
<?php 
class Cliente{
    //ATRIBUTOS
    public $nome = 'felipe';
    public $idade = 18;
    public function apresentar(){ //DECLARANDO UMA FUNÇÃO DENTRO DA CLASSE
        echo "nome: {$this -> nome} idade: {$this -> idade} <br> <br>"; //ASSIM SE IMPRIME UMA VARIAVEL DENTRO DE UMA CLASSE
    }
}
$cliente1 = new Cliente(); //VARIAVEL CRIADA FORA DA CLASSE CLIENTE, DEVE SER FEITO ASSIM PARA INSERI-LA E USAR A FUNCAO CRIADA DENTRO DA CLASSE
$cliente1 -> nome = 'felipe silveira'; //} AQUI O VALOR DA VARIAVEL FOI MUDADO PQ FOI INSERIDO NO ATRIBUTO "NOME"
$cliente1 -> idade = 54;                //}AQUI TBM
$cliente1 -> apresentar(). '<br>';

$cliente2 = new Cliente();; //AKI FOI CRIADO UM NOVO CLIENTE
$cliente2 -> nome = 'gabriel';
$cliente2 -> idade = 43;
$cliente2 -> apresentar(); //ESSE COMANDO DEVE SER FEITO PARA A FUNCAO SER ACESSADA

echo '<hr>';

class data{
public $dia = 10;
public $mes = 'Maio';
public $ano = '2022';

public function apresentar2(){
    echo "hoje o dia é : {$this -> dia}/{$this -> mes}/{$this -> ano}";
}
}
$diadoano = new data();
$diadoano -> apresentar2();
