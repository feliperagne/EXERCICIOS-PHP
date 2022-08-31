<div class="titulo">Desafio dos 7 erros</div>
<?php
interface template{
    function metodo1();
    function metodo2($parametro);
}
abstract class classeabstrata implements template{
    public function metodo3(){
        echo "estou funcionando";
    }
}
class classe extends classeabstrata{
    function __construct($parametro)
    {
        
    }
    public function metodo1()
    {
        
    }
    public function metodo2($parametro)
    {
        
    }
}

$exemplo =  new classe('consegui!');
$exemplo->metodo3();