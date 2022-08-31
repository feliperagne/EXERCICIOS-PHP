<div class="titulo">Modificador final</div>
<?php
abstract class abstrata{
    abstract public function metodo1();
    final public function metodo2(){ // essa funcao nao pode ser herdada
        echo "nao vou mudar!<br>";
    }
}
class Classe extends abstrata{
    public function metodo1()
    {
        echo 'executando metodo 1<br>';
    }
    //public function metodo2(){
      //  echo 'extendendo metodo 2 <br>';
    //}
}

$classe = new Classe();
$classe->metodo1();
//$classe->metodo2();

final class unica{ //UMA CLASSE Q NAO PODE SER HERDADA
    public $attr = 'valor';
}
$Unica = new unica();
 echo $Unica->attr;