<div class="titulo">Classe abstrata</div>
<?php
abstract class abstrata{ //uma classe abstrata nao pode ser instanciada!
    abstract public function metodo1();
    abstract protected function metodo2($parametro);
}
abstract class filhaabstrata extends abstrata{ //DECLARAÇAO DE UMA CLASSE ABSTRATA
    public function metodo1()
    {
        echo "imprimindo metodo 1!";
    }
    abstract public function metodo3();
}
class concreta extends filhaabstrata{
public function metodo1()
{
    echo "executando metodo 1 extendido <br>";
    parent::metodo1();
}
protected function metodo2($parametro)
{
    echo "executando metodo 2 com parametro $parametro <br>";
}
public function metodo3()
{
    echo 'executando metodo 3 <br>';
    $this->metodo2('interno'); // DESSE JEITO, FOI IMPRIMIDO O METODO 2 (QUE É PROTEGIDO)!
}
}

$c = new concreta();
$c->metodo1();
echo '<br>';
$c->metodo3();
//$c->metodo2('externo'); NAO DA PRA IMPRIMIR PQ É UM METODO PROTEGIDO
echo "fim";